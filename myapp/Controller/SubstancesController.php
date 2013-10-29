<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Names');
App::import('Controller', 'Formulas');
/**
 * Substances Controller
 *
 * @property Substance $Substance
 * @property PaginatorComponent $Paginator
 */
class SubstancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

        public function beforeFilter(){
          $privileges=$this->Session->read('Privileges');
          $privileges=$privileges['substances'];
          foreach ($privileges as $action => $allowed){       
            if ($allowed) $this->Auth->allow($action);
          }
          //$this->Auth->allow('search');
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Substance->recursive = 1;
		$this->set('substances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Substance->exists($id)) {
			throw new NotFoundException(__('Invalid substance'));
		}
		$options = array('conditions' => array('Substance.' . $this->Substance->primaryKey => $id));
		$this->set('substance', $this->Substance->find('first', $options));
	}
	
	public function cleanName($name){
		$rev=strrev(trim($name));
		while ($rev{0}==' ' || $rev{0}==',' || $rev{0}==';'){
			$rev=substr($rev, 1);			
		}
		return trim(strrev($rev));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {		
		//$this->printStack();
		$stack=$this->peekStack();
		$data=false;
		if ($stack!==false && isset($stack['data']['Substance']['Formula'])){
			//print "<pre>"; print_r($stack); die();
			$data=$stack['data'];
			$this->popStack();
		} elseif ($this->request->is('post')) {
			$data=$this->request->data;
			$names=explode("\n",$data['Name']['Name']); // convert to array
			$names=array_filter(array_map(array($this,'cleanName'), $names)); // remove whitespace and empty entries
			$data['Name']['Name']=implode("\n", $names); // put cleaned names back in data array					
			//print "<pre>"; print_r($data); die();
		}
		
		if ($data!==false){		
			if (isset($data['Substance']['derive']) && $data['Substance']['derive']){
				$data['Substance']['Formula']='derived';
			}			

			$formula=$data['Substance']['Formula'];
			$parameters=$this->Substance->Formula->getParameters($formula);
			if (!empty($parameters)){
				
				// TODO: implement parameter specification request
				
			}
			
			// go on and save formula
				
			$Formulas = new FormulasController();			
			$Formulas->Session=$this->Session; // needed for use in Names->add
			$Formulas->Auth=$this->Auth;
			
			$fid=$Formulas->add($formula);
			
				
			// go on and save the names
			
			$Names = new NamesController();			
			$Names->Session=$this->Session; // needed for use in Names->add
			$Names->Auth=$this->Auth;
			
			$names=explode("\n",$data['Name']['Name']); // convert to array
			$nids=$Names->add($names); // save names			
				
			// formula and names saved, no create substance object
				
			$substance=array(
					'Substance' => array(
							'formula_fid' => $fid,
							'user_id' => $this->Auth->user('id'),
							'date' => DboSource::expression('NOW()')
					),
					'Name' => array('Name'=>$nids),
			);
			
			if ($this->Substance->save($substance)) {
				$this->Session->setFlash(__('The substance has been saved.'));				
				
				if (isset($data['Substance']['derive']) && $data['Substance']['derive']){
					
					$id=$this->Substance->getInsertID();
					$data['Substance']['id']=$id;
					$action=array('controller'=>'substances','action'=>'view',$id);
					$this->pushToStack(array('action'=>$action,'data'=>$data));
				
					return $this->redirect(array('controller'=>'parameters_uses','action'=>'add'));
				}				
								
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The substance could not be saved. Please, try again.'));
			} //*/
		}
		$users = $this->Substance->User->find('list');
		$formulas = $this->Substance->Formula->find('list');
		$names = $this->Substance->Name->find('list');
		$lHSs = $this->Substance->LHS->find('list');
		$rHSs = $this->Substance->RHS->find('list');
		$this->set(compact('users', 'formulas', 'names', 'lHSs', 'rHSs'));
	}
	
	public function search(){
		$name=$this->request->data['name'];
		foreach ($this->request->data as $field => $searchstring){
			
			$substances=array();			
			if ($field=='name'){	
		    $this->Substance->Name->contain('Substance');
		    $names=$this->Substance->Name->find('all',array('conditions'=>array('name LIKE' => '%'.$name.'%')));
		    foreach ($names as $name_key => $name_entry){
			    $name=$name_entry['Name']['name'];
			
			    foreach ($name_entry['Substance'] as $substance_key => $substance_entry){
						$sid=$substance_entry['id'];
						if (!isset($substances[$sid])){
							$substances[$sid]=array();
						}
						$substances[$sid][]=$name;				
					}
				}		
			} else {
				$substances=array('unknown search field '.$field);
			}
			$this->layout='ajax';
			$this->set(compact('substances'));				
		}
	}
	
	public function search_inheritable(){

		$name=$this->request->data['name'];
		foreach ($this->request->data as $field => $searchstring){				
			$sids=array();
			$substances=array();
			if ($field=='name'){
				$this->Substance->Name->contain('Substance');
				$names=$this->Substance->Name->find('all',array('conditions'=>array('name LIKE' => '%'.$name.'%')));
				foreach ($names as $name_key => $name_entry){
					foreach ($name_entry['Substance'] as $substance_key => $substance_entry){
						$sids[]=$substance_entry['id'];
					}
				}
				$sids=array_unique($sids);
				$this->Substance->contain('ParametersUse','Name');
				$res=$this->Substance->find('all',array('conditions'=>array('Substance.id' => $sids)));
				foreach ($res as $substance){
					if ($substance['ParametersUse']){
						$sid=$substance['Substance']['id'];
						foreach ($substance['Name'] as $sname){
							$name=$sname['name'];
							if (!isset($substances[$sid])){
								$substances[$sid]=array();
							}
							$substances[$sid][]=$name;			
							
						}
					}
				}				
			} else {
				$substances=array('unknown search field '.$field);
			}
			$this->layout='ajax';
			$this->set(compact('substances'));
		}		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Substance->exists($id)) {
			throw new NotFoundException(__('Invalid substance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Substance->save($this->request->data)) {
				$this->Session->setFlash(__('The substance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The substance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Substance.' . $this->Substance->primaryKey => $id));
			$this->request->data = $this->Substance->find('first', $options);
		}
		$users = $this->Substance->User->find('list');
		$formulas = $this->Substance->Formula->find('list');
		$names = $this->Substance->Name->find('list');
		$lHSs = $this->Substance->LH->find('list');
		$rHSs = $this->Substance->RH->find('list');
		$this->set(compact('users', 'formulas', 'names', 'lHSs', 'rHSs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Substance->id = $id;
		if (!$this->Substance->exists()) {
			throw new NotFoundException(__('Invalid substance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Substance->delete()) {
			$this->Session->setFlash(__('The substance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The substance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

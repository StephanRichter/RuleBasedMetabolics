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

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$formula=$this->request->data['Substance']['Formula'];
			$names=explode("\n",$this->request->data['Name']['Name']);
			$names=array_map('trim', $names);			
			$Names = new NamesController();			
			$Formulas = new FormulasController();			
			$Names->Session=$this->Session; // needed for use in Names->add
			$Names->Auth=$this->Auth;
			$Formulas->Session=$this->Session; // needed for use in Names->add
			$Formulas->Auth=$this->Auth;
			$nids=$Names->add($names);
			$fid=$Formulas->add($formula);

			
				
			$parameters=$this->Substance->Formula->getParameters($formula);
			if (!empty($parameters)){
				$open_parameters=array();
				$open_parameters['formula']=$formula;
				$open_parameters['parameters']=$parameters;												
			}
			
				
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
				
			  if (isset($open_parameters)) {
			  	$open_parameters['substance_id']=$this->Substance->getInsertID();
				  $this->Session->write('openparameters',$open_parameters);
			  	return $this->redirect(array('controller'=>'parameters_uses','action'=>'add'));
				}
				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The substance could not be saved. Please, try again.'));
			}
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

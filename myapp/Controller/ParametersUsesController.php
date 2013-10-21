<?php
App::uses('AppController', 'Controller');
/**
 * ParametersUses Controller
 *
 * @property ParametersUse $ParametersUse
 * @property PaginatorComponent $Paginator
 */
class ParametersUsesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	var $helpers = array('Html', 'Js'=>array('Jquery'));
	
	public function beforeFilter(){
		$privileges=$this->Session->read('Privileges');
		$privileges=$privileges['parameters'];
		foreach ($privileges as $action => $allowed){
			if ($allowed) $this->Auth->allow($action);
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ParametersUse->recursive = 0;
		$this->set('parametersUses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParametersUse->exists($id)) {
			throw new NotFoundException(__('Invalid parameters use'));
		}
		$options = array('conditions' => array('ParametersUse.' . $this->ParametersUse->primaryKey => $id));
		$this->set('parametersUse', $this->ParametersUse->find('first', $options));
	}
	
	public function checkSubstance(){
		$object=$this->peekStack();
		if ($object===false){ // if there is nothing on the stack: go home
			$this->Session->setFlash(__('parameters_uses/add called without data.'));
			$this->redirect('/');
			return false;
		}
		
		if (isset($object['data']['Substance']) && $object['data']['Substance']['Formula']=='derived'){ // if we were called during substance creation: go on
			$names=explode("\n",$object['data']['Name']['Name']);
			$names=array_map('trim', $names);
			return '"'.implode('" / "', $names).'"';			
		}
		
		// if the object on the stack is unknown: go home
		$this->Session->setFlash(__('Unknown object on action stack.'));
		$this->redirect('/');
		return false;		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$names=$this->checkSubstance();
		$this->set('names',$names);
	}
	
/**
 * inherit method
 *
 * @return void
 */
	public function define() {
		
		$stack=$this->peekStack();
		if ($stack!==false && isset($stack['data']['ParametersUse']['parameter'])){
			$this->ParametersUse->create();
			if ($this->ParametersUse->save($this->request->data)) {				
				$this->Session->setFlash(__('The parameter use has been saved.'));

				
				
			} else {
				$this->Session->setFlash(__('The parameters use could not be saved. Please, try again.'));
			}			
		} elseif ($this->request->is('post')) {
			
			$data=$this->request->data;
			
			if (isset($data['ParametersUse']['new_parameter'])){
				$action=array('controller'=>'parameters_uses','action'=>'define');
				$this->pushToStack(array('action'=>$action,'data'=>$data));
				
				return $this->redirect(array('controller'=>'parameters','action'=>'add'));
			}
			
			print "<pre>";
			print_r($data);
			die();
			
			
			$this->ParametersUse->create();
			if ($this->ParametersUse->save($this->request->data)) {
				$this->Session->setFlash(__('The parameters use has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parameters use could not be saved. Please, try again.'));
			}
		}
		
		$names=$this->checkSubstance();
		
		$users = $this->ParametersUse->User->find('list');
		$parameters = $this->ParametersUse->Parameter->find('list');
		$substances = $this->ParametersUse->Substance->find('list');
		$this->set(compact('users', 'parameters', 'substances','names'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParametersUse->exists($id)) {
			throw new NotFoundException(__('Invalid parameters use'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ParametersUse->save($this->request->data)) {
				$this->Session->setFlash(__('The parameters use has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parameters use could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ParametersUse.' . $this->ParametersUse->primaryKey => $id));
			$this->request->data = $this->ParametersUse->find('first', $options);
		}
		$users = $this->ParametersUse->User->find('list');
		$parameters = $this->ParametersUse->Parameter->find('list');
		$substances = $this->ParametersUse->Substance->find('list');
		$this->set(compact('users', 'parameters', 'substances'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ParametersUse->id = $id;
		if (!$this->ParametersUse->exists()) {
			throw new NotFoundException(__('Invalid parameters use'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParametersUse->delete()) {
			$this->Session->setFlash(__('The parameters use has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parameters use could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

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

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$open_parameters=$this->Session->read('openparameters');
		
		
		if ($this->request->is('post')) {
			$db = ConnectionManager::getDataSource('default');
			$this->request->data['ParametersUse']['user_id']=$this->Auth->user('id');
			$this->request->data['ParametersUse']['date']=$db->expression('NOW()');
			$this->ParametersUse->create();
			if ($this->ParametersUse->save($this->request->data)) {
				$this->Session->setFlash(__('The parameters use has been saved.'));
				
				$dummy=$open_parameters['parameters'];
				array_shift($dummy);
				$open_parameters['parameters']=$dummy;
				if (empty($open_parameters['parameters'])) {
					$this->Session->delete('openparameters');
				return $this->redirect(array('action' => 'index'));
				}
				$this->Session->write('openparameters',$open_parameters);				
				$this->redirect('add');
			} else {
				$this->Session->setFlash(__('The parameters use could not be saved. Please, try again.'));
			}
		}
		$users = $this->ParametersUse->User->find('list');
		$parameters = $this->ParametersUse->Parameter->find('list');
		if (empty($parameters)){
			$this->Session->setFlash(__('The formula you just submitted contained a parameter, but there is not a singel parameter defined, yet. Please define at least one parameter!'));
			return $this->redirect(array('controller'=>'parameters','action'=>'add'));
		}
		$abbrevation = reset($open_parameters['parameters']);
		$formula=$open_parameters['formula'];
		$sid=$open_parameters['substance_id'];
		$substance=$this->ParametersUse->Substance->find('first',array('conditions'=>array('Substance.id'=>$sid)));
		//$substances = array($open_parameters['substance_id']);		
		
		$substances = $this->ParametersUse->Substance->find('list');
		$this->set(compact('users', 'parameters', 'substance','abbrevation','formula'));
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

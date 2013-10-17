<?php
App::uses('AppController', 'Controller');
/**
 * Parameters Controller
 *
 * @property Parameter $Parameter
 * @property PaginatorComponent $Paginator
 */
class ParametersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
		$this->Parameter->recursive = 0;
		$this->set('parameters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
		$this->set('parameter', $this->Parameter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$db = ConnectionManager::getDataSource('default');
			$this->request->data['Parameter']['user_id']=$this->Auth->user('id');
			$this->request->data['Parameter']['date']=$db->expression('NOW()');
			$this->Parameter->create();
			if ($this->Parameter->save($this->request->data)) {
				$this->Session->setFlash(__('The parameter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parameter could not be saved. Please, try again.'));
			}
		}
		$users = $this->Parameter->User->find('list');
		$substances = $this->Parameter->Substance->find('list');
		$oldSubstances = $this->Parameter->OldSubstance->find('list');
		$referredSubstances = $this->Parameter->ReferredSubstance->find('list');
		$oldReferredSubstances = $this->Parameter->OldReferredSubstance->find('list');
		$reactions = $this->Parameter->Reaction->find('list');
		$oldReactions = $this->Parameter->OldReaction->find('list');
		$this->set(compact('users', 'substances', 'oldSubstances', 'referredSubstances', 'oldReferredSubstances', 'reactions', 'oldReactions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parameter->save($this->request->data)) {
				$this->Session->setFlash(__('The parameter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parameter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
			$this->request->data = $this->Parameter->find('first', $options);
		}
		$users = $this->Parameter->User->find('list');
		$substances = $this->Parameter->Substance->find('list');
		$oldSubstances = $this->Parameter->OldSubstance->find('list');
		$referredSubstances = $this->Parameter->ReferredSubstance->find('list');
		$oldReferredSubstances = $this->Parameter->OldReferredSubstance->find('list');
		$reactions = $this->Parameter->Reaction->find('list');
		$oldReactions = $this->Parameter->OldReaction->find('list');
		$this->set(compact('users', 'substances', 'oldSubstances', 'referredSubstances', 'oldReferredSubstances', 'reactions', 'oldReactions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Parameter->id = $id;
		if (!$this->Parameter->exists()) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parameter->delete()) {
			$this->Session->setFlash(__('The parameter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parameter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

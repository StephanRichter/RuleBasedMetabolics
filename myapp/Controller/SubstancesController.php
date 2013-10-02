<?php
App::uses('AppController', 'Controller');
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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Substance->recursive = 0;
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
			$this->Substance->create();
			if ($this->Substance->save($this->request->data)) {
				$this->Session->setFlash(__('The substance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The substance could not be saved. Please, try again.'));
			}
		}
		$names = $this->Substance->Name->find('list');
		$parameters = $this->Substance->Parameter->find('list');
		$this->set(compact('names', 'parameters'));
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
		$names = $this->Substance->Name->find('list');
		$parameters = $this->Substance->Parameter->find('list');
		$this->set(compact('names', 'parameters'));
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

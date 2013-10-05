<?php
App::uses('AppController', 'Controller');
/**
 * Formulas Controller
 *
 * @property Formula $Formula
 * @property PaginatorComponent $Paginator
 */
class FormulasController extends AppController {

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
		$this->Formula->recursive = 0;
		$this->set('formulas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Formula->exists($id)) {
			throw new NotFoundException(__('Invalid formula'));
		}
		$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id));
		$this->set('formula', $this->Formula->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formula->create();
			if ($this->Formula->save($this->request->data)) {
				$this->Session->setFlash(__('The formula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formula could not be saved. Please, try again.'));
			}
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
		if (!$this->Formula->exists($id)) {
			throw new NotFoundException(__('Invalid formula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formula->save($this->request->data)) {
				$this->Session->setFlash(__('The formula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id));
			$this->request->data = $this->Formula->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Formula->id = $id;
		if (!$this->Formula->exists()) {
			throw new NotFoundException(__('Invalid formula'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Formula->delete()) {
			$this->Session->setFlash(__('The formula has been deleted.'));
		} else {
			$this->Session->setFlash(__('The formula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

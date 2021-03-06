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
	public function add($formula = null) {		
		
		$redirect=false;
		
		/* if we dont get formulas by parameter: check request */
		if ($formula!=null){
			$formula=array('Formula'=>array('formula'=>$formula));
		} else if ($this->request->is('post')) {
			$formula=$this->request->data;
			
			/* as we got our formulas per post request: redirect to index after saving. */
			$redirect=array('action' => 'index');
		}
		
		/* we got formulas to store! */
		if ($formula != null){			
			$entries=array();
			
			$conditions=$formula['Formula'];
			$entry = $this->Formula->find('first',array('conditions'=>$conditions));
			
			if (!empty($entry)){
				$this->Session->setFlash('Formula already in database.');
				if ($redirect !== false) return $this->redirect($redirect); // if called with POST data: return to index
				return $entry['Formula']['id'];
			}
			
			/* store the data sets */
			$this->Formula->create();
			if ($this->Formula->saveAll($formula)) {
				$this->Session->setFlash(__('The formulas have been saved.'));
				if ($redirect !== false) return $this->redirect($redirect); // if called with POST data: return to index				
				
				return $this->Formula->getInsertID(); // return ids
			} else {
				$this->Session->setFlash(__('The formulas could not be saved. Please, try again.'));
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

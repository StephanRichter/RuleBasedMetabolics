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
			$Formulas->Session=$this->Session; // needed for use in Names->add
			$nids=$Names->add($names);
			$fid=$Formulas->add($formula);
			
			$substance=array(
					'Substance' => array('formula_id' => $fid),
					'Name' => array('Name'=>$nids),
					'Parameter' => array('Parameter'=>''));
		
			if ($this->Substance->save($substance)) {
				$this->Session->setFlash(__('The substance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The substance could not be saved. Please, try again.'));
			}
		}
		$formulas = $this->Substance->Formula->find('list');
		$names = $this->Substance->Name->find('list');
		$parameters = $this->Substance->Parameter->find('list');
		$this->set(compact('formulas', 'names', 'parameters'));
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
		$formulas = $this->Substance->Formula->find('list');
		$names = $this->Substance->Name->find('list');
		$parameters = $this->Substance->Parameter->find('list');
		$this->set(compact('formulas', 'names', 'parameters'));
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

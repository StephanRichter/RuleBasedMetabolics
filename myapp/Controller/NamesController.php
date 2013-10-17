<?php
App::uses('AppController', 'Controller');
/**
 * Names Controller
 *
 * @property Name $Name
 * @property PaginatorComponent $Paginator
 */
class NamesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter(){
		$privileges=$this->Session->read('Privileges');
		$privileges=$privileges['names'];
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
		$this->Name->recursive = 0;
		$this->set('names', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Name->exists($id)) {
			throw new NotFoundException(__('Invalid name'));
		}
		$options = array('conditions' => array('Name.' . $this->Name->primaryKey => $id));
		$this->set('name', $this->Name->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($names = null) {		
		
		$redirect=false;
		
		/* if we dont get names by parameter: check request */
		if ($names==null && $this->request->is('post')) {
			$names=explode("\n",$this->request->data['Name']['name']);
			
			/* as we got our names per post request: redirect to index after saving. */
			$redirect=array('action' => 'index');
		}
		
		/* we got names to store! */
		if ($names != null){			
			$entries=array();
			$ids=array();			
			
			$names=array_map('trim', $names);						
			$conditions=array('Name.name'=>$names);
			$existing = $this->Name->find('all',array('conditions'=>$conditions));
			
			foreach ($existing as $entry){
				$ids[]=$entry['Name']['id'];
				$key=array_search($entry['Name']['name'], $names);
				unset($names[$key]);
			}
			
			if (empty($names)){
				$this->Session->setFlash(__('All Names already existing.'));
				if ($redirect !== false) return $this->redirect($redirect); // if called with POST data: return to index
				return $ids;
			}
			
			$now=DboSource::expression('NOW()');
			/* create a dataset per name */
			foreach ($names as $name){
				$entries[]=array(
						'Name'=>array(
								'name'=>$name,
								'user_id'=>$this->Auth->user('id'),
								'date'=>$now,
								//'oldid'=>null
						)
				);
			}
			
			/* store the data sets */
			$this->Name->create();
			if ($this->Name->saveAll($entries)) {
				$this->Session->setFlash(__('The names have been saved.'));
				if ($redirect !== false) return $this->redirect($redirect); // if called with POST data: return to index				
				
				return array_merge($ids,$this->Name->inserted_ids); // return ids
			} else {
				$this->Session->setFlash(__('The names could not be saved. Please, try again.'));
			}
		}
		$users = $this->Name->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Name->exists($id)) {
			throw new NotFoundException(__('Invalid name'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Name->save($this->request->data)) {
				$this->Session->setFlash(__('The name has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The name could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Name.' . $this->Name->primaryKey => $id));
			$this->request->data = $this->Name->find('first', $options);
		}
		$users = $this->Name->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Name->id = $id;
		if (!$this->Name->exists()) {
			throw new NotFoundException(__('Invalid name'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Name->delete()) {
			$this->Session->setFlash(__('The name has been deleted.'));
		} else {
			$this->Session->setFlash(__('The name could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
*/
class UsersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->Auth->allow('logout');
		if ($this->User->find('count') == 0){
			$this->Auth->allow('addfirst');
		}

		$privileges=$this->Session->read('Privileges');
		$privileges=$privileges['users'];
		foreach ($privileges as $action => $allowed){
			if ($allowed) $this->Auth->allow($action);
		}
	}

	private function setPrivileges($username){
		$privileges=array('view'=>false,'ins'=>false,'edit'=>false,'del'=>false,'recover'=>false,'user_management'=>false);
		if ($username != null){
			$user=$this->User->find('first',array('conditions'=>array('username'=>$username)));
			$roles=$user['Role'];
			foreach ($roles as $role){
				foreach ($privileges as $key => $value){
					if ($role[$key]==1) $privileges[$key]=true;
				}
			}
		}

		$priv=array(
				'names' => array(
						'add' => $privileges['ins'],
						'edit' => $privileges['edit'],
						'index'=> $privileges['view'],
						'view' => $privileges['view'],
				),
				'roles' => array(
						'add' => $privileges['user_management'],
						'delete' => $privileges['user_management'],
						'index' => $privileges['view'],
						'view' => $privileges['user_management'],
				),
				'substances' => array(
						'add' => $privileges['ins'],
						'edit' => $privileges['edit'],
						'index'=> $privileges['view'],
						'view' => $privileges['view'],
				),
				'users' => array(
						'add' => $privileges['user_management'],
						'delete' => $privileges['user_management'],
						'index' => $privileges['user_management'],
						'view' => $username,
				),

		);

		$this->Session->write('Privileges',$priv);

	}

	public function login() {

		$numberOfUsers=$this->User->find('count');

		if ($numberOfUsers == 0){
			$numberOfRoles=$this->User->Role->find('count');
			if ($numberOfRoles == 0){
				return $this->redirect(array('controller'=>'roles','action'=>'createadmin'));
			}
			return $this->redirect(array('action'=>'addfirst'));
		}

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->setPrivileges($this->request->data['User']['username']);
				$this->Session->setFlash(__('Successfully logged in.'));
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		$this->setPrivileges(null);
		return $this->redirect($this->Auth->logout());
	}
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	public function addfirst(){
		if ($this->request->is('post')){
			$adminRole=$this->User->Role->find('first',array('fields'=>'id','conditions'=>array('role'=>'admin')));
			$this->request->data['User']['created']=DboSource::expression('NOW()');
			$this->request->data['User']['modified']=$this->request->data['User']['created'];
			$this->request->data['Role']['Role']=$adminRole['Role']['id'];
			$this->User->create();
			if ($this->User->save($this->request->data)){
				$this->Session->setFlash(__('The first user has been created'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
	}
	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

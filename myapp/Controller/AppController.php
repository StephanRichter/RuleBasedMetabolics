<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::uses('ConnectionManager', 'Model');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
*/
class AppController extends Controller {

	public $components = array(
			'Session',
			'Auth' => array(
					'loginRedirect' => array('controller' => 'substances', 'action' => 'index'),
					'logoutRedirect' => array('controller' => 'substances', 'action' => 'index'),
					'authorize' => array('Controller') // Added this line
			)
	);
	
	private $stack='sessionstack';		
	

	public function isAuthorized($user) {
		// Default deny
		return false;
	}
	
	public function pushToStack($object){
		if ($this->Session->check($this->stack)){
			$sessionstack=$this->Session->read($this->stack);
		} else {
			$sessionstack=array();
		}
		array_push($sessionstack,$object);
		$this->Session->write($this->stack,$sessionstack);		
	}
	
	public function peekStack(){
		if ($this->Session->check($this->stack)){
			$sessionstack=$this->Session->read($this->stack);
			return end($sessionstack);
		}
		return false;		
	}
	
	public function popStack(){
		if ($this->Session->check($this->stack)){
			$sessionstack=$this->Session->read($this->stack);
			if (empty($sessionstack)) return false;
			$res=array_pop($sessionstack);
			$this->Session->write($this->stack,$sessionstack);
			return $res;
		}
		return false;		
	}
}

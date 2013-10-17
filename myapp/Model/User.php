<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $validate = array(
			'username' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A username is required'
					)
			),
			'name' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'The real name of the user is required'
					)
			),
			'email' => array(
					'required' => array(
							'rule' => array('email'),
							'message' => 'A valid email is required'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A password is required'
					)
			)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}

<?php

App::uses('AuthComponent', 'Controller/Component');

class Role extends AppModel {
	public $validate = array(
			'role' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A role name is mandatory'
					),
					'between' => array(
							'rule'    => array('between', 5, 100),
							'message' => 'Between 5 to 15 characters'
					)
			),
			'description' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A description for the role is required'
					)
			)
	);
}

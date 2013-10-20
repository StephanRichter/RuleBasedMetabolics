<?php
App::uses('AppModel', 'Model');
/**
 * ParametersUse Model
 *
 * @property User $User
 * @property Parameter $Parameter
 * @property Substance $Substance
 */
class ParametersUse extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'parameters_use';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'puid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'abbrevation';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'puid' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parameter_pid' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'id_id' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'abbrevation' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Parameter' => array(
			'className' => 'Parameter',
			'foreignKey' => 'parameter_pid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Substance' => array(
			'className' => 'Substance',
			'foreignKey' => 'id_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * Substance Model
 *
 * @property Name $Name
 * @property Parameter $Parameter
 */
class Substance extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'sid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'formula';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Name' => array(
			'className' => 'Name',
			'joinTable' => 'names_substances',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'name_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Parameter' => array(
			'className' => 'Parameter',
			'joinTable' => 'parameters_substances',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'parameter_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}

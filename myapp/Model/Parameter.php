<?php
App::uses('AppModel', 'Model');
/**
 * Parameter Model
 *
 * @property Substance $Substance
 */
class Parameter extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'pid';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Substance' => array(
			'className' => 'Substance',
			'joinTable' => 'parameters_substances',
			'foreignKey' => 'parameter_id',
			'associationForeignKey' => 'substance_id',
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

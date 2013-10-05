<?php
App::uses('AppModel', 'Model');
/**
 * Substance Model
 *
 * @property Formula $Formula
 * @property Name $Name
 * @property Parameter $Parameter
 */
class Substance extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'formula_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Formula' => array(
			'className' => 'Formula',
			'foreignKey' => 'formula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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

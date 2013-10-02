<?php
App::uses('AppModel', 'Model');
/**
 * Substance Model
 *
 * @property Name $Name
 * @property Parameter $Parameter
 */
class Substance extends AppModel {


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

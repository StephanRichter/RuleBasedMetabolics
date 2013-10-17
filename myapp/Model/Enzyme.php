<?php
App::uses('AppModel', 'Model');
/**
 * Enzyme Model
 *
 * @property OldEnzyme $History
 * @property Compartment $Compartment
 * @property Reaction $Reaction
 * @property OldCompartment $OldCompartment
 */
class Enzyme extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ecnumber';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ecnumber' => array(
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'History' => array(
			'className' => 'OldEnzyme',
			'foreignKey' => 'oldid',
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
		'Compartment' => array(
			'className' => 'Compartment',
			'joinTable' => 'compartments_enzymes',
			'foreignKey' => 'enzyme_id',
			'associationForeignKey' => 'compartment_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Reaction' => array(
			'className' => 'Reaction',
			'joinTable' => 'enzymes_reactions',
			'foreignKey' => 'enzyme_id',
			'associationForeignKey' => 'reaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldCompartment' => array(
			'className' => 'OldCompartment',
			'joinTable' => 'old_compartments_enzymes',
			'foreignKey' => 'enzyme_id',
			'associationForeignKey' => 'old_compartment_id',
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

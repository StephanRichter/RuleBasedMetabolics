<?php
App::uses('AppModel', 'Model');
/**
 * Substance Model
 *
 * @property Formula $Formula
 * @property User $User
 * @property Name $Name
 * @property Reaction $LHS
 * @property Reaction $RHS
 */
class Substance extends AppModel {
	public $actsAs = array('Containable');
	
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
		'Formula' => array(
			'className' => 'Formula',
			'foreignKey' => 'formula_fid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),			
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
			'joinTable' => 'id_names',
			'foreignKey' => 'id_id',
			'associationForeignKey' => 'name_nid',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
			'LHS' => array(
			'className' => 'Reaction',
			'joinTable' => 'lhs',
			'foreignKey' => 'reaction_id',
			'associationForeignKey' => 'substance_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'RHS' => array(
			'className' => 'Reaction',
			'joinTable' => 'rhs',
			'foreignKey' => 'reaction_id',
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

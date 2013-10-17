<?php
App::uses('AppModel', 'Model');
/**
 * Reaction Model
 *
 * @property Reaction $History
 * @property User $User
 * @property Enzyme $Enzyme
 * @property OldEnzyme $OldEnzyme
 * @property Substance $LHS
 * @property Substance $RHS
 * @property Reaction $OldLHS
 * @property Substance $OldRHS
 */
class Reaction extends AppModel {

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
		'spontan' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
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
			'className' => 'Reaction',
			'foreignKey' => 'oldid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Enzyme' => array(
			'className' => 'Enzyme',
			'joinTable' => 'enzymes_reactions',
			'foreignKey' => 'reaction_id',
			'associationForeignKey' => 'enzyme_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldEnzyme' => array(
			'className' => 'OldEnzyme',
			'joinTable' => 'old_enzymes_reactions',
			'foreignKey' => 'reaction_id',
			'associationForeignKey' => 'old_enzyme_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'LHS' => array(
			'className' => 'Substance',
			'joinTable' => 'lhs',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'reaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'RHS' => array(
			'className' => 'Substance',
			'joinTable' => 'rhs',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'reaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldLHS' => array(
			'className' => 'Substance',
			'joinTable' => 'old_lhs',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'reaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldRHS' => array(
			'className' => 'Substance',
			'joinTable' => 'old_rhs',
			'foreignKey' => 'substance_id',
			'associationForeignKey' => 'reaction_id',
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

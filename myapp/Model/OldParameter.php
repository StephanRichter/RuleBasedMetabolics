<?php
App::uses('AppModel', 'Model');
/**
 * OldParameter Model
 *
 * @property OldParameter $History
 * @property User $User
 * @property Substance $SubstanceParameters
 * @property Substance $OldSubstanceParameters
 * @property Substance $ReferredSubstance
 * @property Substance $OldReferredSubstance
 */
class OldParameter extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'oid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'oid' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pid' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
			'className' => 'OldParameter',
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
		'SubstanceParameters' => array(
			'className' => 'Substance',
			'joinTable' => 'parameters_use',
			'foreignKey' => 'parameter_pid',
			'associationForeignKey' => 'id_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldSubstanceParameters' => array(
			'className' => 'Substance',
			'joinTable' => 'old_parameters_use',
			'foreignKey' => 'parameter_pid',
			'associationForeignKey' => 'id_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'ReferredSubstance' => array(
			'className' => 'Substance',
			'joinTable' => 'parameters_use',
			'foreignKey' => 'parameter_pid',
			'associationForeignKey' => 'ref_substance_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OldReferredSubstance' => array(
			'className' => 'Substance',
			'joinTable' => 'old_parameters_use',
			'foreignKey' => 'parameter_pid',
			'associationForeignKey' => 'ref_substance_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
                'ReactionParameters' => array(
                        'className' => 'Reaction',
                        'joinTable' => 'parameters_use',
                        'foreignKey' => 'parameter_pid',
                        'associationForeignKey' => 'id_id',
                        'unique' => 'keepExisting',
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'finderQuery' => '',
                ),
                'OldReactionParameters' => array(
                        'className' => 'Reaction',
                        'joinTable' => 'old_parameters_use',
                        'foreignKey' => 'parameter_pid',
                        'associationForeignKey' => 'id_id',
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

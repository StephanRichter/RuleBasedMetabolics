<?php
App::uses('AppModel', 'Model');
/**
 * Formula Model
 *
 * @property OldFormula $History
 * @property User $User
 * @property Substance $Substance
 */
class Formula extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'fid';

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
		'fid' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'formula' => array(
			'rule' => array('checkFormula'),
			'message' => 'This is not a valid formula'
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
	
	public function checkFormula($formula){
		return true;
	}
	
	public function getParameters($code){
		$formula=$this->parseFormula($code);
		return $formula['parameters'];
	}
	
	public function parseFormula($code){
		$formula=$this->parseWeightedGroup($code);		
		if ($formula===false){
			$formula=$this->parseGroup($code);
		}

		if ($formula===false) print("this is not a formula");
		
		return $formula;
	}
	
	function parseWeightedGroup($code){
		if (strpos($code, '(')===false) return false;
		
		print("Formula->parseWeightedGroup not implemented."); die();
		// TODO implement rest of code
	}
	
	function parseGroup($code){				
		$weightedAtom=$this->parseWeightedAtom($code);
		if ($weightedAtom===false) return false;
		print_r($weightedAtom);
		print "Formula->parseGroup not implemented";		
		die();
	}
	
	function parseWeightedAtom($code){
		$atom=$this->parseAtom(&$code);
		if ($atom===false) return false;
		
		$weight=$this->parseCount(&$code);
		if ($weight===false) $weight=1;
		return array('atom'=>$atom,'weight'=>$weight);
	}
	
	function parseCount($code){
		if (!ctype_digit($code{0})) return false;
		$num='';
		while (ctype_digit($code{0})){
			$num.=$code{0};
			$code=substr($code, 1);
		}
		return $num;
	}

	function parseAtom($code){
		if (!ctype_upper($code{0})) return false;
		$atom=$code{0};
		$code=substr($code, 1);
		if (ctype_lower($code{0})) {
			$atom.=$code{0};
			$code=substr($code, 1);
		}
		return $atom;
	}
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'History' => array(
			'className' => 'OldFormula',
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Substance' => array(
			'className' => 'Substance',
			'foreignKey' => 'formula_fid',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

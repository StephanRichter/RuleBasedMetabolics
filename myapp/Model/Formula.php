<?php
App::uses('AppModel', 'Model');
/**
 * Formula Model
 *
 * @property Substance $Substance
 */
class Formula extends AppModel {
	
	const fail='#fail#'; 

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'formula';
	public $error=null;
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
		'formula' => array(
			'isFormula' => array(			
				'rule' => array('isFormula'),
				'message' => 'Your Formula does not fulfill the annotation requirements!'
			),
			'validElements' => array(
				'rule' => array('validElements'),
				'message' => 'Your Formula contains unknown Elements!'
			)
		)
	);
	
	
	
	function readFactor($formula){
		if (!is_numeric(substr($formula,0,1))) {
			$this->error="Factor expected at ...$formula";
			return self::fail;
		}
		$formula=substr($formula,1);
		while(strlen($formula)>0 && is_numeric(substr($formula,0,1))){
			$formula=substr($formula,1);
		}
		return $formula;
	}
	
	function readElement($formula){
		$upper=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$lower=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		if (in_array(substr($formula, 0,1),$upper)){
			if (in_array(substr($formula, 1,1),$lower)){
				return substr($formula,2);
			}
			return substr($formula,1);
		}
		$this->error="Element expected at ...$formula";
		return self::fail;
	}
	
	function readBracket($formula){
		$org=$formula;
		if (substr($formula,0,1)=='('){
			$formula=substr($formula,1);
			while (substr($formula,0,1)!=')'){
				$formula=$this->readPart($formula);
				if ($formula==self::fail) {
					return self::fail;				
				}
				if (strlen($formula)==0){
					$this->error="Missing closing bracket!";
					return self::fail;
				}
			}
			$formula=substr($formula,1);
			$dummy=$this->readFactor($formula);
			if ($dummy==self::fail) {
				$this->error=null;
				return $formula;
			}
			return $dummy;				
		}
		return self::fail;
	}
	
	function readGroup($formula){
		$org=$formula;
		$formula=$this->readElement($formula);
		if ($formula==self::fail) {
			return self::fail;
		}
		$dummy=$this->readFactor($formula);	
		if ($dummy == self::fail) {
			$this->error=null;
			return $formula;
		}
		return $dummy;		
	}
	
	function readPart($formula){
		if (substr($formula,0,1)=='(') return $this->readBracket($formula);
		return $this->readGroup($formula);
	}
	
	public function isFormula($input){
		if (empty($input)) {
			return false;
		}
		$formula=$input['formula'];
		if (empty($formula)) {
			return false;
		}	
		
		while (strlen($formula)>0){
			$org=$formula;			
			$formula=$this->readPart($formula);
			if ($formula == self::fail) {
				return false;
			}
		} 
		return true;
	}
	
	public function validElements($input){
		return true;
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Substance' => array(
			'className' => 'Substance',
			'foreignKey' => 'formula_id',
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

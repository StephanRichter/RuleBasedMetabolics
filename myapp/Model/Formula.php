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
		return ($this->parseFormula($formula['formula'])!==false);
	}
	
	public function getParameters($code){
		$formula=$this->parseFormula($code);
		$parameters=array();
		$this->extractParameters($parameters,$formula);		
		return array_unique($parameters);
	}
	
	public function extractParameters(&$param,$formula){
		if (is_array($formula)){
			foreach ($formula as $part){				
				$this->extractParameters($param, $part);
			}
		} else {
			if (ctype_alpha($formula)){
				$param[]=$formula;
			}
		}
	}
	
	public function parseFormula(&$code){
		//print "parseFormula( '$code' )<br/>";
		$part=$this->parseWeightedGroup($code);		
		if ($part===false){
			$part=$this->parseGroup($code);
		}
		if ($part===false) return false;
		$formula=array();		
		while ($part!==false){
			$formula[]=$part;
			$part=$this->parseWeightedGroup($code);
			if ($part===false){
				$part=$this->parseGroup($code);
			}				
		}
		return $formula;
	}
	
	function parseWeightedGroup(&$code){
		//print "parseWeightedGroup( '$code' )<br/>";
		$code=trim($code);
		if (strlen($code)<3) return false;
		if ($code{0}!='(') return false;
		
		$code=trim(substr($code, 1));
		
		$formula=$this->parseFormula($code);
		$code=trim($code);
		if (strlen($code)==0) return false;
		if ($code{0}!=')') return false;
		$code=substr($code, 1);
		
		$count=$this->parseCount($code);
		if ($count===false){
			return $formula;
		}
		
		return array($count,'*',$formula);
	}
	
	function parseGroup(&$code){
		//print "parseGroup( '$code' )<br/>";
		$code=trim($code);
		if (strlen($code)==0) return false;
		$weightedAtom=$this->parseWeightedAtom($code);
		$group=array();
		if ($weightedAtom===false) return false;
		while ($weightedAtom!==false){
			$atom=$weightedAtom['atom'];
			$weight=$weightedAtom['weight'];
			if (isset($group[$atom])){
				$group[$atom]+=$weight;
			} else {
				$group[$atom]=$weight;
			}
			$weightedAtom=$this->parseWeightedAtom($code);
		}
		return $group;
	}
	
	function parseWeightedAtom(&$code){
		//print "parseWeightedAtom( '$code' )<br/>";
		$code=trim($code);
		$atom=$this->parseAtom($code);
		if ($atom===false) return false;
		
		$weight=$this->parseCount($code);
		if ($weight===false) $weight=1;
		return array('atom'=>$atom,'weight'=>$weight);
	}
	
	function parseBracketTerm(&$code){
		//print "parseBracketTerm( '$code' )<br/>";
		$code=trim($code);
		
		if (strlen($code)<3) return false;
		if ($code{0}!='(') return false;
		$code=trim(substr($code, 1));
		$count=$this->parseCount($code);
		if ($count===false) return false;
		$code=trim($code);
		if (strlen($code)==0) return false;
		if ($code{0}!=')') return false;
		$code=substr($code, 1);
		return $count;	
		
	}
	
	function parseCount(&$code){
		//print "parseCount( '$code' )<br/>";
		$code=trim($code);
		if (strlen($code)==0) return false;
		$ops=array('+','-','*','/');
		$dummy=false;
		if ($code{0}=='(') {
			$dummy=$this->parseBracketTerm($code);
		} elseif ($code{0}=='$'){
			$dummy=$this->parseVariable($code);			
		} else {
			$dummy=$this->parseNumber($code);
		}
		if ($dummy===false) return false;		
		$count=$dummy;		
		$code=trim($code);
		if (strlen($code)==0) return $count;
		$op=$code{0};
		
		if (in_array($op, $ops)) {
			$count=array();
			$count[]=$dummy;
			$code=trim(substr($code, 1));
			$dummy=$this->parseCount($code);
			if ($dummy===false) return false;
			$count[]=$op;
			$count[]=$dummy;									
		}
				
		return $count;
	}
	
	function parseVariable(&$code){
		//print "parseVariable( '$code' )<br/>";
		$code=trim($code);
		if (strlen($code)<2) return false;		
		if ($code{0}!='$') return false;
		$var=$code{1};
		$code=substr($code, 2);
		return $var;		
	}
	
	function parseNumber(&$code){
		//print "parseNumber( '$code' )<br/>";
		$code=trim($code);		
		if (!ctype_digit($code{0})) return false;
		$num='';
		while (ctype_digit($code{0})){
			$num.=$code{0};
			$code=substr($code, 1);
		}
		return $num;
	}

	function parseAtom(&$code){
		//print "parseAtom( '$code' )<br/>";
		$code=trim($code);
		if (strlen($code)==0) return false;
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

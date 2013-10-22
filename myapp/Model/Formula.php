<?php
App::uses('AppModel', 'Model');
/**
 * Formula Model
 *
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
	
	public function checkFormula($arg){
		$code=$arg['formula'];
		//print "<pre>";
		$res=$this->parseFormula($code);
		//print_r($res);
		if ($res===false){
			//print "false"; die();
			return false;
		}
		//print "true"; die();
		return true;
	}
	
	public function getParameters($code){
		$parameters=array();
		if ($code=='derived') return $parameters;
		$formula=$this->parseFormula($code);
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
		if ($code=='derived') return $code;
		
		//print "parseFormula($code)\n";
	  $part=$this->parsePart($code);
	  if ($part===false) return false;	  
	  $formula=array($part);	  	   
	  while (strlen($code)>0){
	  	//print "code='$code'\n";
	  	$binding=$this->parseBinding($code);
	  	if ($binding===false) return false;	  	
	  	//print "code='$code'\n";
	  	
	  	$part=$this->parsePart($code);
	  	if ($part===false) return false;
	  	$formula[]=$binding;
	  	$formula[]=$part;	  	
	  }
	  return $formula;
	} 	
	
	public function parseBinding(&$code){
		//print "\nparseBinding($code)\n\n";
		if ($code{0}!='~') return false;
		$binding=$code{0};
		$code=substr($code, 1);
		if (ctype_lower($code{0}) && $code{1}=='~'){
			$binding.=$code{0}.$code{1};
			$code=substr($code, 2);
		}
		//print "binding=$binding\n";
		return $binding;
	}
	
	public function parsePart(&$code){
		//print "parsePart($code)\n";
		$reference=$this->parseReference($code);
		if ($reference!==false) return $reference;
		$fg=$this->parseFormulaGroup($code);
		if ($fg!==false) return $fg;		
		return $this->parseSequence($code);
	}
	
	public function parseReference(&$code){
		//print "parseReference($code)\n";
		if ($code{0}!='#') return false;
		$code=trim(substr($code, 1));
		$id='';
		while (ctype_digit($code{0})){
			$id.=$code{0};
			$code=substr($code, 1);
		}
		if (strlen($id)<1) return false;
		//print "id=$id\n";
		$params=$this->parseParams($code);
		$reference=array('substance'=>$id);
		if ($params!==false){
			$reference['params']=$params;
		}
		return $reference;
	}
	
	public function parseParams(&$code){
		//print "parseParams($code)\n";
		if ($code{0}!='[') return false;
		$code=trim(substr($code,1));
		$count=$this->parseCount($code);
		if ($count===false) return false;
		$params=array($count);
		while ($code{0}==','){			
			$code=trim(substr($code,1));
			$count=$this->parseCount($code);
			if ($count==false) return false;
			$params[]=$count;
		}
		if ($code{0}!=']') return false;
		$code=trim(substr($code,1));
		return $params;
	}
	
	public function parseSequence(&$code){
		//print "parseSequence($code)\n";
		if ($code{0}.$code{1}.$code{2}.$code{3}!='seq(') return false;
		$code=trim(substr($code, 4));
		$var=$this->parseVariable($code);
		if ($var===false)	return false;
		//print "var=$var\n";
		if ($code{0}!='?') return false;
		$code=trim(substr($code, 1));
		if ($code{0}=='$')$code=trim(substr($code, 1));
		if (ctype_alpha($code{0})){
			$index=$code{0};
			//print "index=$index\n";
		} else return false;
		$code=trim(substr($code, 1));
		if ($code{0}!=':') return false;
		$code=trim(substr($code, 1));
		$part=$this->parsePart($code);
		if ($part===false) return false;
		if ($code{0}!=')') return false;
		$code=trim(substr($code, 1));
		$seq=array();
		$seq['var']=$var;
		$seq['index']='$'.$index;
		$part=$this->bindParameter($index,$part);
		$seq['part']=$part;
		return array('sequence'=>$seq);
	}
	
	function bindParameter($param,$data){
		if (!is_array($data)) return $data;
		foreach ($data as $key => $val){
			if (is_array($val)) {
				$val=$this->bindParameter($param, $val);
				$data[$key]=$val;
			} elseif ($val==$param) {
				$data[$key]='$'.$param;
			}		
		}
		return $data;
	}
	
	public function parseFormulaGroup(&$code){
		//print "parseFormulaGroup( '$code' )<br/>";
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
		if (count($formula)==1) $formula=$formula[0];
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
		//print "parseVariable($code)<br/>";
		$code=trim($code);
		if (strlen($code)<2) return false;		
		if ($code{0}!='$') return false;
		$var=$code{1};
		$code=substr($code, 2);
		return $var;		
	}
	
	function parseNumber(&$code){
		//print "parseNumber($code)<br/>";
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

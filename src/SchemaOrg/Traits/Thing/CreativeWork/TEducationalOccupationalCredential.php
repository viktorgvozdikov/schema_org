<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEducationalOccupationalCredential{
	 /**
	 * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity.
	 * @var String $competencyRequired
	 */
	protected $competencyRequired;

	 /**
	 * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
	 * @var String $credentialCategory
	 */
	protected $credentialCategory;

	 /**
	 * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
	 * @var String $recognizedBy
	 */
	protected $recognizedBy;

	 /**
	 * The duration of validity of a permit or similar thing.
	 * @var String $validFor
	 */
	protected $validFor;

	 /**
	 * The geographic area where a permit or similar thing is valid.
	 * @var String $validIn
	 */
	protected $validIn;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCompetencyRequired($x){
		$this->competencyRequired = new Text('competencyRequired',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCredentialCategory($x){
		$this->credentialCategory = new Text('credentialCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecognizedBy($x){
		$this->recognizedBy = new Text('recognizedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFor($x){
		$this->validFor = new Text('validFor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidIn($x){
		$this->validIn = new Text('validIn',$x);
		return $this;
	}


}
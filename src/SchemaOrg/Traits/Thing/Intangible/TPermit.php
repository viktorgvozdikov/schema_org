<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPermit{
	 /**
	 * The organization issuing the ticket or permit.
	 * @var String $issuedBy
	 */
	protected $issuedBy;

	 /**
	 * The service through with the permit was granted.
	 * @var String $issuedThrough
	 */
	protected $issuedThrough;

	 /**
	 * The target audience for this permit.
	 * @var String $permitAudience
	 */
	protected $permitAudience;

	 /**
	 * The duration of validity of a permit or similar thing.
	 * @var String $validFor
	 */
	protected $validFor;

	 /**
	 * The date when the item becomes valid.
	 * @var String $validFrom
	 */
	protected $validFrom;

	 /**
	 * The geographic area where a permit or similar thing is valid.
	 * @var String $validIn
	 */
	protected $validIn;

	 /**
	 * The date when the item is no longer valid.
	 * @var String $validUntil
	 */
	protected $validUntil;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssuedBy($x){
		$this->issuedBy = new Text('IssuedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssuedThrough($x){
		$this->issuedThrough = new Text('IssuedThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPermitAudience($x){
		$this->permitAudience = new Text('PermitAudience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFor($x){
		$this->validFor = new Text('ValidFor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFrom($x){
		$this->validFrom = new Text('ValidFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidIn($x){
		$this->validIn = new Text('ValidIn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidUntil($x){
		$this->validUntil = new Text('ValidUntil',$x);
		return $this;
	}


}
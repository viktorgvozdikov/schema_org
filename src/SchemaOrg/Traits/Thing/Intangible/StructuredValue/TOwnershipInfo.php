<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOwnershipInfo{
	 /**
	 * The organization or person from which the product was acquired.
	 * @var String $acquiredFrom
	 */
	protected $acquiredFrom;

	 /**
	 * The date and time of obtaining the product.
	 * @var String $ownedFrom
	 */
	protected $ownedFrom;

	 /**
	 * The date and time of giving up ownership on the product.
	 * @var String $ownedThrough
	 */
	protected $ownedThrough;

	 /**
	 * The product that this structured value is referring to.
	 * @var String $typeOfGood
	 */
	protected $typeOfGood;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcquiredFrom($x){
		$this->acquiredFrom = new Text('AcquiredFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOwnedFrom($x){
		$this->ownedFrom = new Text('OwnedFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOwnedThrough($x){
		$this->ownedThrough = new Text('OwnedThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypeOfGood($x){
		$this->typeOfGood = new Text('TypeOfGood',$x);
		return $this;
	}


}
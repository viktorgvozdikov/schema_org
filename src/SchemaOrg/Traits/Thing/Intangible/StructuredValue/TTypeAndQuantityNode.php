<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTypeAndQuantityNode{
	 /**
	 * The quantity of the goods included in the offer.
	 * @var String $amountOfThisGood
	 */
	protected $amountOfThisGood;

	 /**
	 * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	 * @var String $businessFunction
	 */
	protected $businessFunction;

	 /**
	 * The product that this structured value is referring to.
	 * @var String $typeOfGood
	 */
	protected $typeOfGood;

	 /**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
	 * @var String $unitCode
	 */
	protected $unitCode;

	 /**
	 * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
	 * <a href="unitCode">unitCode</a>.
	 * @var String $unitText
	 */
	protected $unitText;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmountOfThisGood($x){
		$this->amountOfThisGood = new Text('amountOfThisGood',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusinessFunction($x){
		$this->businessFunction = new Text('businessFunction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypeOfGood($x){
		$this->typeOfGood = new Text('typeOfGood',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitCode($x){
		$this->unitCode = new Text('unitCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitText($x){
		$this->unitText = new Text('unitText',$x);
		return $this;
	}


}
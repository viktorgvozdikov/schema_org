<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TUnitPriceSpecification{
	 /**
	 * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
	 * @var String $billingIncrement
	 */
	protected $billingIncrement;

	 /**
	 * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
	 * @var String $priceType
	 */
	protected $priceType;

	 /**
	 * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
	 * @var String $referenceQuantity
	 */
	protected $referenceQuantity;

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
	public function setBillingIncrement($x){
		$this->billingIncrement = new Text('BillingIncrement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceType($x){
		$this->priceType = new Text('PriceType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReferenceQuantity($x){
		$this->referenceQuantity = new Text('ReferenceQuantity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitCode($x){
		$this->unitCode = new Text('UnitCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitText($x){
		$this->unitText = new Text('UnitText',$x);
		return $this;
	}


}
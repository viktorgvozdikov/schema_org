<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TQuantitativeValue{
	 /**
	 * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br><br>
	 * 
	 * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	 * @var String $additionalProperty
	 */
	protected $additionalProperty;

	 /**
	 * The upper value of some characteristic or property.
	 * @var String $maxValue
	 */
	protected $maxValue;

	 /**
	 * The lower value of some characteristic or property.
	 * @var String $minValue
	 */
	protected $minValue;

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
	 * The value of the quantitative value or property value node.<br><br><ul>
	 * <li>For <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
	 * <li>For <a class="localLink" href="/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $value
	 */
	protected $value;

	 /**
	 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	 * @var String $valueReference
	 */
	protected $valueReference;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalProperty($x){
		$this->additionalProperty = new Text('AdditionalProperty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaxValue($x){
		$this->maxValue = new Text('MaxValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinValue($x){
		$this->minValue = new Text('MinValue',$x);
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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValue($x){
		$this->value = new Text('Value',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueReference($x){
		$this->valueReference = new Text('ValueReference',$x);
		return $this;
	}


}
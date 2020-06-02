<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TQualitativeValue{
	 /**
	 * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br><br>
	 * 
	 * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	 * @var String $additionalProperty
	 */
	protected $additionalProperty;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is equal to the object.
	 * @var String $equal
	 */
	protected $equal;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is greater than the object.
	 * @var String $greater
	 */
	protected $greater;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
	 * @var String $greaterOrEqual
	 */
	protected $greaterOrEqual;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is lesser than the object.
	 * @var String $lesser
	 */
	protected $lesser;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
	 * @var String $lesserOrEqual
	 */
	protected $lesserOrEqual;

	 /**
	 * This ordering relation for qualitative values indicates that the subject is not equal to the object.
	 * @var String $nonEqual
	 */
	protected $nonEqual;

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
	public function setEqual($x){
		$this->equal = new Text('Equal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGreater($x){
		$this->greater = new Text('Greater',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGreaterOrEqual($x){
		$this->greaterOrEqual = new Text('GreaterOrEqual',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLesser($x){
		$this->lesser = new Text('Lesser',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLesserOrEqual($x){
		$this->lesserOrEqual = new Text('LesserOrEqual',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNonEqual($x){
		$this->nonEqual = new Text('NonEqual',$x);
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
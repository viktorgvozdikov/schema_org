<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPropertyValueSpecification{
	 /**
	 * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
	 * @var String $defaultValue
	 */
	protected $defaultValue;

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
	 * Whether multiple values are allowed for the property.  Default is false.
	 * @var String $multipleValues
	 */
	protected $multipleValues;

	 /**
	 * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
	 * @var String $readonlyValue
	 */
	protected $readonlyValue;

	 /**
	 * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
	 * @var String $stepValue
	 */
	protected $stepValue;

	 /**
	 * Specifies the allowed range for number of characters in a literal value.
	 * @var String $valueMaxLength
	 */
	protected $valueMaxLength;

	 /**
	 * Specifies the minimum allowed range for number of characters in a literal value.
	 * @var String $valueMinLength
	 */
	protected $valueMinLength;

	 /**
	 * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
	 * @var String $valueName
	 */
	protected $valueName;

	 /**
	 * Specifies a regular expression for testing literal values according to the HTML spec.
	 * @var String $valuePattern
	 */
	protected $valuePattern;

	 /**
	 * Whether the property must be filled in to complete the action.  Default is false.
	 * @var String $valueRequired
	 */
	protected $valueRequired;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDefaultValue($x){
		$this->defaultValue = new Text('defaultValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaxValue($x){
		$this->maxValue = new Text('maxValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinValue($x){
		$this->minValue = new Text('minValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMultipleValues($x){
		$this->multipleValues = new Text('multipleValues',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReadonlyValue($x){
		$this->readonlyValue = new Text('readonlyValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStepValue($x){
		$this->stepValue = new Text('stepValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueMaxLength($x){
		$this->valueMaxLength = new Text('valueMaxLength',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueMinLength($x){
		$this->valueMinLength = new Text('valueMinLength',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueName($x){
		$this->valueName = new Text('valueName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValuePattern($x){
		$this->valuePattern = new Text('valuePattern',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueRequired($x){
		$this->valueRequired = new Text('valueRequired',$x);
		return $this;
	}


}
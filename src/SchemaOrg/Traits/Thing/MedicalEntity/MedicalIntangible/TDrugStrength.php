<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDrugStrength{
	 /**
	 * An active ingredient, typically chemical compounds and/or biologic substances.
	 * @var String $activeIngredient
	 */
	protected $activeIngredient;

	 /**
	 * The location in which the strength is available.
	 * @var String $availableIn
	 */
	protected $availableIn;

	 /**
	 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
	 * @var String $maximumIntake
	 */
	protected $maximumIntake;

	 /**
	 * The units of an active ingredient's strength, e.g. mg.
	 * @var String $strengthUnit
	 */
	protected $strengthUnit;

	 /**
	 * The value of an active ingredient's strength, e.g. 325.
	 * @var String $strengthValue
	 */
	protected $strengthValue;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActiveIngredient($x){
		$this->activeIngredient = new Text('ActiveIngredient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableIn($x){
		$this->availableIn = new Text('AvailableIn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumIntake($x){
		$this->maximumIntake = new Text('MaximumIntake',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStrengthUnit($x){
		$this->strengthUnit = new Text('StrengthUnit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStrengthValue($x){
		$this->strengthValue = new Text('StrengthValue',$x);
		return $this;
	}


}
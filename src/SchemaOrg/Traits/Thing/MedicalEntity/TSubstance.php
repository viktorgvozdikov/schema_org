<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSubstance{
	 /**
	 * An active ingredient, typically chemical compounds and/or biologic substances.
	 * @var String $activeIngredient
	 */
	protected $activeIngredient;

	 /**
	 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
	 * @var String $maximumIntake
	 */
	protected $maximumIntake;


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
	public function setMaximumIntake($x){
		$this->maximumIntake = new Text('MaximumIntake',$x);
		return $this;
	}


}
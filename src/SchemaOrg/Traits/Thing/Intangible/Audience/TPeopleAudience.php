<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPeopleAudience{
	 /**
	 * Specifying the health condition(s) of a patient, medical study, or other target audience.
	 * @var String $healthCondition
	 */
	protected $healthCondition;

	 /**
	 * Audiences defined by a person's gender.
	 * @var String $requiredGender
	 */
	protected $requiredGender;

	 /**
	 * Audiences defined by a person's maximum age.
	 * @var String $requiredMaxAge
	 */
	protected $requiredMaxAge;

	 /**
	 * Audiences defined by a person's minimum age.
	 * @var String $requiredMinAge
	 */
	protected $requiredMinAge;

	 /**
	 * The gender of the person or audience.
	 * @var String $suggestedGender
	 */
	protected $suggestedGender;

	 /**
	 * Maximal age recommended for viewing content.
	 * @var String $suggestedMaxAge
	 */
	protected $suggestedMaxAge;

	 /**
	 * Minimal age recommended for viewing content.
	 * @var String $suggestedMinAge
	 */
	protected $suggestedMinAge;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthCondition($x){
		$this->healthCondition = new Text('healthCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiredGender($x){
		$this->requiredGender = new Text('requiredGender',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiredMaxAge($x){
		$this->requiredMaxAge = new Text('requiredMaxAge',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiredMinAge($x){
		$this->requiredMinAge = new Text('requiredMinAge',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuggestedGender($x){
		$this->suggestedGender = new Text('suggestedGender',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuggestedMaxAge($x){
		$this->suggestedMaxAge = new Text('suggestedMaxAge',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuggestedMinAge($x){
		$this->suggestedMinAge = new Text('suggestedMinAge',$x);
		return $this;
	}


}
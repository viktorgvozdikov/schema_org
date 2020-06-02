<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TExercisePlan{
	 /**
	 * Length of time to engage in the activity.
	 * @var String $activityDuration
	 */
	protected $activityDuration;

	 /**
	 * How often one should engage in the activity.
	 * @var String $activityFrequency
	 */
	protected $activityFrequency;

	 /**
	 * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
	 * @var String $additionalVariable
	 */
	protected $additionalVariable;

	 /**
	 * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
	 * @var String $exerciseType
	 */
	protected $exerciseType;

	 /**
	 * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
	 * @var String $intensity
	 */
	protected $intensity;

	 /**
	 * Number of times one should repeat the activity.
	 * @var String $repetitions
	 */
	protected $repetitions;

	 /**
	 * How often one should break from the activity.
	 * @var String $restPeriods
	 */
	protected $restPeriods;

	 /**
	 * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
	 * @var String $workload
	 */
	protected $workload;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActivityDuration($x){
		$this->activityDuration = new Text('ActivityDuration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setActivityFrequency($x){
		$this->activityFrequency = new Text('ActivityFrequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalVariable($x){
		$this->additionalVariable = new Text('AdditionalVariable',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExerciseType($x){
		$this->exerciseType = new Text('ExerciseType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIntensity($x){
		$this->intensity = new Text('Intensity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRepetitions($x){
		$this->repetitions = new Text('Repetitions',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRestPeriods($x){
		$this->restPeriods = new Text('RestPeriods',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkload($x){
		$this->workload = new Text('Workload',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\PlayAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TExerciseAction{
	 /**
	 * A sub property of instrument. The diet used in this action.
	 * @var String $diet
	 */
	protected $diet;

	 /**
	 * The distance travelled, e.g. exercising or travelling.
	 * @var String $distance
	 */
	protected $distance;

	 /**
	 * A sub property of location. The course where this action was taken. Supersedes <a href="/course">course</a>.
	 * @var String $exerciseCourse
	 */
	protected $exerciseCourse;

	 /**
	 * A sub property of instrument. The exercise plan used on this action.
	 * @var String $exercisePlan
	 */
	protected $exercisePlan;

	 /**
	 * A sub property of instrument. The diet used in this action.
	 * @var String $exerciseRelatedDiet
	 */
	protected $exerciseRelatedDiet;

	 /**
	 * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
	 * @var String $exerciseType
	 */
	protected $exerciseType;

	 /**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * @var String $fromLocation
	 */
	protected $fromLocation;

	 /**
	 * A sub property of participant. The opponent on this action.
	 * @var String $opponent
	 */
	protected $opponent;

	 /**
	 * A sub property of location. The sports activity location where this action occurred.
	 * @var String $sportsActivityLocation
	 */
	protected $sportsActivityLocation;

	 /**
	 * A sub property of location. The sports event where this action occurred.
	 * @var String $sportsEvent
	 */
	protected $sportsEvent;

	 /**
	 * A sub property of participant. The sports team that participated on this action.
	 * @var String $sportsTeam
	 */
	protected $sportsTeam;

	 /**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @var String $toLocation
	 */
	protected $toLocation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiet($x){
		$this->diet = new Text('Diet',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDistance($x){
		$this->distance = new Text('Distance',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExerciseCourse($x){
		$this->exerciseCourse = new Text('ExerciseCourse',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExercisePlan($x){
		$this->exercisePlan = new Text('ExercisePlan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExerciseRelatedDiet($x){
		$this->exerciseRelatedDiet = new Text('ExerciseRelatedDiet',$x);
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
	public function setFromLocation($x){
		$this->fromLocation = new Text('FromLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOpponent($x){
		$this->opponent = new Text('Opponent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSportsActivityLocation($x){
		$this->sportsActivityLocation = new Text('SportsActivityLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSportsEvent($x){
		$this->sportsEvent = new Text('SportsEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSportsTeam($x){
		$this->sportsTeam = new Text('SportsTeam',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setToLocation($x){
		$this->toLocation = new Text('ToLocation',$x);
		return $this;
	}


}
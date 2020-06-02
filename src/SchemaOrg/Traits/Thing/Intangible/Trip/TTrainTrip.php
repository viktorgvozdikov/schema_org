<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Trip;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTrainTrip{
	 /**
	 * The platform where the train arrives.
	 * @var String $arrivalPlatform
	 */
	protected $arrivalPlatform;

	 /**
	 * The station where the train trip ends.
	 * @var String $arrivalStation
	 */
	protected $arrivalStation;

	 /**
	 * The platform from which the train departs.
	 * @var String $departurePlatform
	 */
	protected $departurePlatform;

	 /**
	 * The station from which the train departs.
	 * @var String $departureStation
	 */
	protected $departureStation;

	 /**
	 * The name of the train (e.g. The Orient Express).
	 * @var String $trainName
	 */
	protected $trainName;

	 /**
	 * The unique identifier for the train.
	 * @var String $trainNumber
	 */
	protected $trainNumber;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalPlatform($x){
		$this->arrivalPlatform = new Text('ArrivalPlatform',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalStation($x){
		$this->arrivalStation = new Text('ArrivalStation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeparturePlatform($x){
		$this->departurePlatform = new Text('DeparturePlatform',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureStation($x){
		$this->departureStation = new Text('DepartureStation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrainName($x){
		$this->trainName = new Text('TrainName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrainNumber($x){
		$this->trainNumber = new Text('TrainNumber',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Trip;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBusTrip{
	 /**
	 * The stop or station from which the bus arrives.
	 * @var String $arrivalBusStop
	 */
	protected $arrivalBusStop;

	 /**
	 * The name of the bus (e.g. Bolt Express).
	 * @var String $busName
	 */
	protected $busName;

	 /**
	 * The unique identifier for the bus.
	 * @var String $busNumber
	 */
	protected $busNumber;

	 /**
	 * The stop or station from which the bus departs.
	 * @var String $departureBusStop
	 */
	protected $departureBusStop;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalBusStop($x){
		$this->arrivalBusStop = new Text('arrivalBusStop',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusName($x){
		$this->busName = new Text('busName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusNumber($x){
		$this->busNumber = new Text('busNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureBusStop($x){
		$this->departureBusStop = new Text('departureBusStop',$x);
		return $this;
	}


}
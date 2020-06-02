<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Trip;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFlight{
	 /**
	 * The kind of aircraft (e.g., "Boeing 747").
	 * @var String $aircraft
	 */
	protected $aircraft;

	 /**
	 * The airport where the flight terminates.
	 * @var String $arrivalAirport
	 */
	protected $arrivalAirport;

	 /**
	 * Identifier of the flight's arrival gate.
	 * @var String $arrivalGate
	 */
	protected $arrivalGate;

	 /**
	 * Identifier of the flight's arrival terminal.
	 * @var String $arrivalTerminal
	 */
	protected $arrivalTerminal;

	 /**
	 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
	 * @var String $boardingPolicy
	 */
	protected $boardingPolicy;

	 /**
	 * The airport where the flight originates.
	 * @var String $departureAirport
	 */
	protected $departureAirport;

	 /**
	 * Identifier of the flight's departure gate.
	 * @var String $departureGate
	 */
	protected $departureGate;

	 /**
	 * Identifier of the flight's departure terminal.
	 * @var String $departureTerminal
	 */
	protected $departureTerminal;

	 /**
	 * The estimated time the flight will take.
	 * @var String $estimatedFlightDuration
	 */
	protected $estimatedFlightDuration;

	 /**
	 * The distance of the flight.
	 * @var String $flightDistance
	 */
	protected $flightDistance;

	 /**
	 * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
	 * @var String $flightNumber
	 */
	protected $flightNumber;

	 /**
	 * Description of the meals that will be provided or available for purchase.
	 * @var String $mealService
	 */
	protected $mealService;

	 /**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes <a href="/merchant">merchant</a>, <a href="/vendor">vendor</a>.
	 * @var String $seller
	 */
	protected $seller;

	 /**
	 * The time when a passenger can check into the flight online.
	 * @var String $webCheckinTime
	 */
	protected $webCheckinTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAircraft($x){
		$this->aircraft = new Text('Aircraft',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalAirport($x){
		$this->arrivalAirport = new Text('ArrivalAirport',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalGate($x){
		$this->arrivalGate = new Text('ArrivalGate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalTerminal($x){
		$this->arrivalTerminal = new Text('ArrivalTerminal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBoardingPolicy($x){
		$this->boardingPolicy = new Text('BoardingPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureAirport($x){
		$this->departureAirport = new Text('DepartureAirport',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureGate($x){
		$this->departureGate = new Text('DepartureGate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureTerminal($x){
		$this->departureTerminal = new Text('DepartureTerminal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatedFlightDuration($x){
		$this->estimatedFlightDuration = new Text('EstimatedFlightDuration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFlightDistance($x){
		$this->flightDistance = new Text('FlightDistance',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFlightNumber($x){
		$this->flightNumber = new Text('FlightNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMealService($x){
		$this->mealService = new Text('MealService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeller($x){
		$this->seller = new Text('Seller',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWebCheckinTime($x){
		$this->webCheckinTime = new Text('WebCheckinTime',$x);
		return $this;
	}


}
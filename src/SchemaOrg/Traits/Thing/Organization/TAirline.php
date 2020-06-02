<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAirline{
	 /**
	 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
	 * @var String $boardingPolicy
	 */
	protected $boardingPolicy;

	 /**
	 * IATA identifier for an airline or airport.
	 * @var String $iataCode
	 */
	protected $iataCode;


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
	public function setIataCode($x){
		$this->iataCode = new Text('IataCode',$x);
		return $this;
	}


}
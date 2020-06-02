<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAirport{
	 /**
	 * IATA identifier for an airline or airport.
	 * @var String $iataCode
	 */
	protected $iataCode;

	 /**
	 * ICAO identifier for an airport.
	 * @var String $icaoCode
	 */
	protected $icaoCode;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIataCode($x){
		$this->iataCode = new Text('iataCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIcaoCode($x){
		$this->icaoCode = new Text('icaoCode',$x);
		return $this;
	}


}
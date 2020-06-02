<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTaxiReservation{
	 /**
	 * Number of people the reservation should accommodate.
	 * @var String $partySize
	 */
	protected $partySize;

	 /**
	 * Where a taxi will pick up a passenger or a rental car can be picked up.
	 * @var String $pickupLocation
	 */
	protected $pickupLocation;

	 /**
	 * When a taxi will pickup a passenger or a rental car can be picked up.
	 * @var String $pickupTime
	 */
	protected $pickupTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartySize($x){
		$this->partySize = new Text('PartySize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPickupLocation($x){
		$this->pickupLocation = new Text('PickupLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPickupTime($x){
		$this->pickupTime = new Text('PickupTime',$x);
		return $this;
	}


}
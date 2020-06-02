<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRentalCarReservation{
	 /**
	 * Where a rental car can be dropped off.
	 * @var String $dropoffLocation
	 */
	protected $dropoffLocation;

	 /**
	 * When a rental car can be dropped off.
	 * @var String $dropoffTime
	 */
	protected $dropoffTime;

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
	public function setDropoffLocation($x){
		$this->dropoffLocation = new Text('dropoffLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDropoffTime($x){
		$this->dropoffTime = new Text('dropoffTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPickupLocation($x){
		$this->pickupLocation = new Text('pickupLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPickupTime($x){
		$this->pickupTime = new Text('pickupTime',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFlightReservation{
	 /**
	 * The airline-specific indicator of boarding order / preference.
	 * @var String $boardingGroup
	 */
	protected $boardingGroup;

	 /**
	 * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
	 * @var String $passengerPriorityStatus
	 */
	protected $passengerPriorityStatus;

	 /**
	 * The passenger's sequence number as assigned by the airline.
	 * @var String $passengerSequenceNumber
	 */
	protected $passengerSequenceNumber;

	 /**
	 * The type of security screening the passenger is subject to.
	 * @var String $securityScreening
	 */
	protected $securityScreening;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBoardingGroup($x){
		$this->boardingGroup = new Text('boardingGroup',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPassengerPriorityStatus($x){
		$this->passengerPriorityStatus = new Text('passengerPriorityStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPassengerSequenceNumber($x){
		$this->passengerSequenceNumber = new Text('passengerSequenceNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSecurityScreening($x){
		$this->securityScreening = new Text('securityScreening',$x);
		return $this;
	}


}
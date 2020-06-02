<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLodgingReservation{
	 /**
	 * The earliest someone may check into a lodging establishment.
	 * @var String $checkinTime
	 */
	protected $checkinTime;

	 /**
	 * The latest someone may check out of a lodging establishment.
	 * @var String $checkoutTime
	 */
	protected $checkoutTime;

	 /**
	 * A full description of the lodging unit.
	 * @var String $lodgingUnitDescription
	 */
	protected $lodgingUnitDescription;

	 /**
	 * Textual description of the unit type (including suite vs. room, size of bed, etc.).
	 * @var String $lodgingUnitType
	 */
	protected $lodgingUnitType;

	 /**
	 * The number of adults staying in the unit.
	 * @var String $numAdults
	 */
	protected $numAdults;

	 /**
	 * The number of children staying in the unit.
	 * @var String $numChildren
	 */
	protected $numChildren;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCheckinTime($x){
		$this->checkinTime = new Text('checkinTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCheckoutTime($x){
		$this->checkoutTime = new Text('checkoutTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLodgingUnitDescription($x){
		$this->lodgingUnitDescription = new Text('lodgingUnitDescription',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLodgingUnitType($x){
		$this->lodgingUnitType = new Text('lodgingUnitType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumAdults($x){
		$this->numAdults = new Text('numAdults',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumChildren($x){
		$this->numChildren = new Text('numChildren',$x);
		return $this;
	}


}
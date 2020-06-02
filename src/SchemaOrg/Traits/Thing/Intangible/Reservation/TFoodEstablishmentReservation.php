<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFoodEstablishmentReservation{
	 /**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $endTime
	 */
	protected $endTime;

	 /**
	 * Number of people the reservation should accommodate.
	 * @var String $partySize
	 */
	protected $partySize;

	 /**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $startTime
	 */
	protected $startTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndTime($x){
		$this->endTime = new Text('endTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartySize($x){
		$this->partySize = new Text('partySize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartTime($x){
		$this->startTime = new Text('startTime',$x);
		return $this;
	}


}
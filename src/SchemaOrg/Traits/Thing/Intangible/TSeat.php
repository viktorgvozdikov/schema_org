<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSeat{
	 /**
	 * The location of the reserved seat (e.g., 27).
	 * @var String $seatNumber
	 */
	protected $seatNumber;

	 /**
	 * The row location of the reserved seat (e.g., B).
	 * @var String $seatRow
	 */
	protected $seatRow;

	 /**
	 * The section location of the reserved seat (e.g. Orchestra).
	 * @var String $seatSection
	 */
	protected $seatSection;

	 /**
	 * The type/class of the seat.
	 * @var String $seatingType
	 */
	protected $seatingType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatNumber($x){
		$this->seatNumber = new Text('SeatNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatRow($x){
		$this->seatRow = new Text('SeatRow',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatSection($x){
		$this->seatSection = new Text('SeatSection',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatingType($x){
		$this->seatingType = new Text('SeatingType',$x);
		return $this;
	}


}
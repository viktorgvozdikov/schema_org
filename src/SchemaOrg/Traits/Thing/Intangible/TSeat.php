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
		$this->seatNumber = new Text('seatNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatRow($x){
		$this->seatRow = new Text('seatRow',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatSection($x){
		$this->seatSection = new Text('seatSection',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatingType($x){
		$this->seatingType = new Text('seatingType',$x);
		return $this;
	}


}
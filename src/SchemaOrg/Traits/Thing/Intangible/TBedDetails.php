<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBedDetails{
	 /**
	 * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
	 * @var String $numberOfBeds
	 */
	protected $numberOfBeds;

	 /**
	 * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
	 * @var String $typeOfBed
	 */
	protected $typeOfBed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfBeds($x){
		$this->numberOfBeds = new Text('numberOfBeds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypeOfBed($x){
		$this->typeOfBed = new Text('typeOfBed',$x);
		return $this;
	}


}
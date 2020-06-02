<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place\Accommodation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSuite{
	 /**
	 * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
	 *       If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
	 * @var String $bed
	 */
	protected $bed;

	 /**
	 * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
	 * Typical unit code(s): C62 for person
	 * @var String $occupancy
	 */
	protected $occupancy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBed($x){
		$this->bed = new Text('Bed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOccupancy($x){
		$this->occupancy = new Text('Occupancy',$x);
		return $this;
	}


}
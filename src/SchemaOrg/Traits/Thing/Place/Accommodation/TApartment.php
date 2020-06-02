<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place\Accommodation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TApartment{
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
	public function setOccupancy($x){
		$this->occupancy = new Text('occupancy',$x);
		return $this;
	}


}
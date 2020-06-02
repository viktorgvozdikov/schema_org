<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TResidence{
	 /**
	 * A floorplan of some <a class="localLink" href="/Accommodation">Accommodation</a>.
	 * @var String $accommodationFloorPlan
	 */
	protected $accommodationFloorPlan;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccommodationFloorPlan($x){
		$this->accommodationFloorPlan = new Text('AccommodationFloorPlan',$x);
		return $this;
	}


}
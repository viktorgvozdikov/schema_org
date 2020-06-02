<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Trip;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTouristTrip{
	 /**
	 * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
	 * @var String $touristType
	 */
	protected $touristType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setTouristType($x){
		$this->touristType = new Text('TouristType',$x);
		return $this;
	}


}
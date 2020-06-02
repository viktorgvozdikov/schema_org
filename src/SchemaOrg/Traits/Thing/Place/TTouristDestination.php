<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTouristDestination{
	 /**
	 * Attraction located at destination.
	 * @var String $includesAttraction
	 */
	protected $includesAttraction;

	 /**
	 * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
	 * @var String $touristType
	 */
	protected $touristType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludesAttraction($x){
		$this->includesAttraction = new Text('IncludesAttraction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTouristType($x){
		$this->touristType = new Text('TouristType',$x);
		return $this;
	}


}
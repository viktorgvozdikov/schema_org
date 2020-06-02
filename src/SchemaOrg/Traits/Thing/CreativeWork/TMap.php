<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMap{
	 /**
	 * Indicates the kind of Map, from the MapCategoryType Enumeration.
	 * @var String $mapType
	 */
	protected $mapType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMapType($x){
		$this->mapType = new Text('MapType',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAudience{
	 /**
	 * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
	 * @var String $audienceType
	 */
	protected $audienceType;

	 /**
	 * The geographic area associated with the audience.
	 * @var String $geographicArea
	 */
	protected $geographicArea;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudienceType($x){
		$this->audienceType = new Text('AudienceType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeographicArea($x){
		$this->geographicArea = new Text('GeographicArea',$x);
		return $this;
	}


}
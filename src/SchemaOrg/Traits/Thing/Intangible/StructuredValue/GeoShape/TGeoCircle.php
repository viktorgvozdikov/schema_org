<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\GeoShape;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGeoCircle{
	 /**
	 * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
	 * @var String $geoMidpoint
	 */
	protected $geoMidpoint;

	 /**
	 * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
	 * @var String $geoRadius
	 */
	protected $geoRadius;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoMidpoint($x){
		$this->geoMidpoint = new Text('GeoMidpoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoRadius($x){
		$this->geoRadius = new Text('GeoRadius',$x);
		return $this;
	}


}
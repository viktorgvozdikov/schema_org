<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeason;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTVSeason{
	 /**
	 * The country of the principal offices of the production company or individual responsible for the movie or program.
	 * @var String $countryOfOrigin
	 */
	protected $countryOfOrigin;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCountryOfOrigin($x){
		$this->countryOfOrigin = new Text('countryOfOrigin',$x);
		return $this;
	}


}
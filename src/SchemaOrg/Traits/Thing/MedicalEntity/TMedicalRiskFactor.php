<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalRiskFactor{
	 /**
	 * The condition, complication, etc. influenced by this factor.
	 * @var String $increasesRiskOf
	 */
	protected $increasesRiskOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncreasesRiskOf($x){
		$this->increasesRiskOf = new Text('increasesRiskOf',$x);
		return $this;
	}


}
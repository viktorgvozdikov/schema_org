<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\SoftwareApplication;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMobileApplication{
	 /**
	 * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
	 * @var String $carrierRequirements
	 */
	protected $carrierRequirements;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCarrierRequirements($x){
		$this->carrierRequirements = new Text('carrierRequirements',$x);
		return $this;
	}


}
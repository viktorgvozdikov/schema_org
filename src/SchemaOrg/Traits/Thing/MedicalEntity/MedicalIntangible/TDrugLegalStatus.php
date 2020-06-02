<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDrugLegalStatus{
	 /**
	 * The location in which the status applies.
	 * @var String $applicableLocation
	 */
	protected $applicableLocation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicableLocation($x){
		$this->applicableLocation = new Text('applicableLocation',$x);
		return $this;
	}


}
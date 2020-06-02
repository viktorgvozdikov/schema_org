<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalTest;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPathologyTest{
	 /**
	 * The type of tissue sample required for the test.
	 * @var String $tissueSample
	 */
	protected $tissueSample;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setTissueSample($x){
		$this->tissueSample = new Text('TissueSample',$x);
		return $this;
	}


}
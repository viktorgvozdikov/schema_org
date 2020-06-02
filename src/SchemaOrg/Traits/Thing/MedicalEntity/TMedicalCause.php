<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalCause{
	 /**
	 * The condition, complication, symptom, sign, etc. caused.
	 * @var String $causeOf
	 */
	protected $causeOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCauseOf($x){
		$this->causeOf = new Text('CauseOf',$x);
		return $this;
	}


}
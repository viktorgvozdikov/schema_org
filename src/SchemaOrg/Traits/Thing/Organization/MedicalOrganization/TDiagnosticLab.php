<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDiagnosticLab{
	 /**
	 * A diagnostic test or procedure offered by this lab.
	 * @var String $availableTest
	 */
	protected $availableTest;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableTest($x){
		$this->availableTest = new Text('availableTest',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDrugClass{
	 /**
	 * Specifying a drug or medicine used in a medication procedure
	 * @var String $drug
	 */
	protected $drug;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrug($x){
		$this->drug = new Text('drug',$x);
		return $this;
	}


}
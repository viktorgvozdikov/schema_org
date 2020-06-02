<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\MedicalAudience;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPatient{
	 /**
	 * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
	 * @var String $diagnosis
	 */
	protected $diagnosis;

	 /**
	 * Specifying a drug or medicine used in a medication procedure
	 * @var String $drug
	 */
	protected $drug;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiagnosis($x){
		$this->diagnosis = new Text('Diagnosis',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrug($x){
		$this->drug = new Text('Drug',$x);
		return $this;
	}


}
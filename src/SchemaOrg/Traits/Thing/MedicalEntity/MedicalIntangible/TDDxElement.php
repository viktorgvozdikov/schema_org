<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDDxElement{
	 /**
	 * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
	 * @var String $diagnosis
	 */
	protected $diagnosis;

	 /**
	 * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
	 * @var String $distinguishingSign
	 */
	protected $distinguishingSign;


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
	public function setDistinguishingSign($x){
		$this->distinguishingSign = new Text('DistinguishingSign',$x);
		return $this;
	}


}
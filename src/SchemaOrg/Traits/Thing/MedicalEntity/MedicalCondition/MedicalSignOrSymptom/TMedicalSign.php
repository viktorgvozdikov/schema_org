<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalSign{
	 /**
	 * A physical examination that can identify this sign.
	 * @var String $identifyingExam
	 */
	protected $identifyingExam;

	 /**
	 * A diagnostic test that can identify this sign.
	 * @var String $identifyingTest
	 */
	protected $identifyingTest;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIdentifyingExam($x){
		$this->identifyingExam = new Text('IdentifyingExam',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIdentifyingTest($x){
		$this->identifyingTest = new Text('IdentifyingTest',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalTest{
	 /**
	 * Drugs that affect the test's results.
	 * @var String $affectedBy
	 */
	protected $affectedBy;

	 /**
	 * Range of acceptable values for a typical patient, when applicable.
	 * @var String $normalRange
	 */
	protected $normalRange;

	 /**
	 * A sign detected by the test.
	 * @var String $signDetected
	 */
	protected $signDetected;

	 /**
	 * A condition the test is used to diagnose.
	 * @var String $usedToDiagnose
	 */
	protected $usedToDiagnose;

	 /**
	 * Device used to perform the test.
	 * @var String $usesDevice
	 */
	protected $usesDevice;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAffectedBy($x){
		$this->affectedBy = new Text('affectedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNormalRange($x){
		$this->normalRange = new Text('normalRange',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSignDetected($x){
		$this->signDetected = new Text('signDetected',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUsedToDiagnose($x){
		$this->usedToDiagnose = new Text('usedToDiagnose',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUsesDevice($x){
		$this->usesDevice = new Text('usesDevice',$x);
		return $this;
	}


}
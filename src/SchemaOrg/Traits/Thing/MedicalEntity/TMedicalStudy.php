<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalStudy{
	 /**
	 * Specifying the health condition(s) of a patient, medical study, or other target audience.
	 * @var String $healthCondition
	 */
	protected $healthCondition;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;

	 /**
	 * The status of the study (enumerated).
	 * @var String $status
	 */
	protected $status;

	 /**
	 * The location in which the study is taking/took place.
	 * @var String $studyLocation
	 */
	protected $studyLocation;

	 /**
	 * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
	 * @var String $studySubject
	 */
	protected $studySubject;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthCondition($x){
		$this->healthCondition = new Text('healthCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('sponsor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStatus($x){
		$this->status = new Text('status',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStudyLocation($x){
		$this->studyLocation = new Text('studyLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStudySubject($x){
		$this->studySubject = new Text('studySubject',$x);
		return $this;
	}


}
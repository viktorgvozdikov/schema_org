<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalProcedure{
	 /**
	 * Location in the body of the anatomical structure.
	 * @var String $bodyLocation
	 */
	protected $bodyLocation;

	 /**
	 * Typical or recommended followup care after the procedure is performed.
	 * @var String $followup
	 */
	protected $followup;

	 /**
	 * How the procedure is performed.
	 * @var String $howPerformed
	 */
	protected $howPerformed;

	 /**
	 * Typical preparation that a patient must undergo before having the procedure performed.
	 * @var String $preparation
	 */
	protected $preparation;

	 /**
	 * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
	 * @var String $procedureType
	 */
	protected $procedureType;

	 /**
	 * The status of the study (enumerated).
	 * @var String $status
	 */
	protected $status;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBodyLocation($x){
		$this->bodyLocation = new Text('BodyLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFollowup($x){
		$this->followup = new Text('Followup',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHowPerformed($x){
		$this->howPerformed = new Text('HowPerformed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPreparation($x){
		$this->preparation = new Text('Preparation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProcedureType($x){
		$this->procedureType = new Text('ProcedureType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStatus($x){
		$this->status = new Text('Status',$x);
		return $this;
	}


}
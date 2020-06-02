<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalGuideline{
	 /**
	 * Strength of evidence of the data used to formulate the guideline (enumerated).
	 * @var String $evidenceLevel
	 */
	protected $evidenceLevel;

	 /**
	 * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
	 * @var String $evidenceOrigin
	 */
	protected $evidenceOrigin;

	 /**
	 * Date on which this guideline's recommendation was made.
	 * @var String $guidelineDate
	 */
	protected $guidelineDate;

	 /**
	 * The medical conditions, treatments, etc. that are the subject of the guideline.
	 * @var String $guidelineSubject
	 */
	protected $guidelineSubject;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvidenceLevel($x){
		$this->evidenceLevel = new Text('EvidenceLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvidenceOrigin($x){
		$this->evidenceOrigin = new Text('EvidenceOrigin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGuidelineDate($x){
		$this->guidelineDate = new Text('GuidelineDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGuidelineSubject($x){
		$this->guidelineSubject = new Text('GuidelineSubject',$x);
		return $this;
	}


}
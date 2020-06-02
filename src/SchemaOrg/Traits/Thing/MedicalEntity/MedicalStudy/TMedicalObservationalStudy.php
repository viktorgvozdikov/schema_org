<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalStudy;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalObservationalStudy{
	 /**
	 * Specifics about the observational study design (enumerated).
	 * @var String $studyDesign
	 */
	protected $studyDesign;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setStudyDesign($x){
		$this->studyDesign = new Text('StudyDesign',$x);
		return $this;
	}


}
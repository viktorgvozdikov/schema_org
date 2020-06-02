<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalStudy;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalTrial{
	 /**
	 * Specifics about the trial design (enumerated).
	 * @var String $trialDesign
	 */
	protected $trialDesign;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrialDesign($x){
		$this->trialDesign = new Text('trialDesign',$x);
		return $this;
	}


}
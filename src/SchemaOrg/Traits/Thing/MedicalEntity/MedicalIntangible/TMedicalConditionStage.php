<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalConditionStage{
	 /**
	 * The stage represented as a number, e.g. 3.
	 * @var String $stageAsNumber
	 */
	protected $stageAsNumber;

	 /**
	 * The substage, e.g. 'a' for Stage IIIa.
	 * @var String $subStageSuffix
	 */
	protected $subStageSuffix;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setStageAsNumber($x){
		$this->stageAsNumber = new Text('stageAsNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubStageSuffix($x){
		$this->subStageSuffix = new Text('subStageSuffix',$x);
		return $this;
	}


}
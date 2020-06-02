<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDiet{
	 /**
	 * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
	 * @var String $dietFeatures
	 */
	protected $dietFeatures;

	 /**
	 * People or organizations that endorse the plan.
	 * @var String $endorsers
	 */
	protected $endorsers;

	 /**
	 * Medical expert advice related to the plan.
	 * @var String $expertConsiderations
	 */
	protected $expertConsiderations;

	 /**
	 * Specific physiologic benefits associated to the plan.
	 * @var String $physiologicalBenefits
	 */
	protected $physiologicalBenefits;

	 /**
	 * Specific physiologic risks associated to the diet plan.
	 * @var String $risks
	 */
	protected $risks;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDietFeatures($x){
		$this->dietFeatures = new Text('DietFeatures',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndorsers($x){
		$this->endorsers = new Text('Endorsers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpertConsiderations($x){
		$this->expertConsiderations = new Text('ExpertConsiderations',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPhysiologicalBenefits($x){
		$this->physiologicalBenefits = new Text('PhysiologicalBenefits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRisks($x){
		$this->risks = new Text('Risks',$x);
		return $this;
	}


}
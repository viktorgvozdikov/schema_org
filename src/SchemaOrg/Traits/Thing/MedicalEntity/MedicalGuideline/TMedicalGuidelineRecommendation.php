<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalGuideline;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalGuidelineRecommendation{
	 /**
	 * Strength of the guideline's recommendation (e.g. 'class I').
	 * @var String $recommendationStrength
	 */
	protected $recommendationStrength;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecommendationStrength($x){
		$this->recommendationStrength = new Text('RecommendationStrength',$x);
		return $this;
	}


}
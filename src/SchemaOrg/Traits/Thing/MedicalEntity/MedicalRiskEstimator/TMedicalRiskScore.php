<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalRiskEstimator;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalRiskScore{
	 /**
	 * The algorithm or rules to follow to compute the score.
	 * @var String $algorithm
	 */
	protected $algorithm;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlgorithm($x){
		$this->algorithm = new Text('Algorithm',$x);
		return $this;
	}


}
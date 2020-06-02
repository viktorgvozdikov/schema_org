<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalRiskEstimator{
	 /**
	 * The condition, complication, or symptom whose risk is being estimated.
	 * @var String $estimatesRiskOf
	 */
	protected $estimatesRiskOf;

	 /**
	 * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
	 * @var String $includedRiskFactor
	 */
	protected $includedRiskFactor;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatesRiskOf($x){
		$this->estimatesRiskOf = new Text('EstimatesRiskOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludedRiskFactor($x){
		$this->includedRiskFactor = new Text('IncludedRiskFactor',$x);
		return $this;
	}


}
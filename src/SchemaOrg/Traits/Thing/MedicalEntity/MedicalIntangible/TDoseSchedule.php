<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDoseSchedule{
	 /**
	 * The unit of the dose, e.g. 'mg'.
	 * @var String $doseUnit
	 */
	protected $doseUnit;

	 /**
	 * The value of the dose, e.g. 500.
	 * @var String $doseValue
	 */
	protected $doseValue;

	 /**
	 * How often the dose is taken, e.g. 'daily'.
	 * @var String $frequency
	 */
	protected $frequency;

	 /**
	 * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
	 * @var String $targetPopulation
	 */
	protected $targetPopulation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDoseUnit($x){
		$this->doseUnit = new Text('DoseUnit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDoseValue($x){
		$this->doseValue = new Text('DoseValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFrequency($x){
		$this->frequency = new Text('Frequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetPopulation($x){
		$this->targetPopulation = new Text('TargetPopulation',$x);
		return $this;
	}


}
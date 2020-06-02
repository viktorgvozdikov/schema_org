<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TNerve{
	 /**
	 * The neurological pathway extension that involves muscle control.
	 * @var String $nerveMotor
	 */
	protected $nerveMotor;

	 /**
	 * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
	 * @var String $sensoryUnit
	 */
	protected $sensoryUnit;

	 /**
	 * The neurological pathway that originates the neurons.
	 * @var String $sourcedFrom
	 */
	protected $sourcedFrom;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNerveMotor($x){
		$this->nerveMotor = new Text('NerveMotor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSensoryUnit($x){
		$this->sensoryUnit = new Text('SensoryUnit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSourcedFrom($x){
		$this->sourcedFrom = new Text('SourcedFrom',$x);
		return $this;
	}


}
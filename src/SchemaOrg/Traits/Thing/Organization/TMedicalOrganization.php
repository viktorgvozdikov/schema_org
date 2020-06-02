<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalOrganization{
	 /**
	 * Name or unique ID of network. (Networks are often reused across different insurance plans).
	 * @var String $healthPlanNetworkId
	 */
	protected $healthPlanNetworkId;

	 /**
	 * Whether the provider is accepting new patients.
	 * @var String $isAcceptingNewPatients
	 */
	protected $isAcceptingNewPatients;

	 /**
	 * A medical specialty of the provider.
	 * @var String $medicalSpecialty
	 */
	protected $medicalSpecialty;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanNetworkId($x){
		$this->healthPlanNetworkId = new Text('HealthPlanNetworkId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAcceptingNewPatients($x){
		$this->isAcceptingNewPatients = new Text('IsAcceptingNewPatients',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMedicalSpecialty($x){
		$this->medicalSpecialty = new Text('MedicalSpecialty',$x);
		return $this;
	}


}
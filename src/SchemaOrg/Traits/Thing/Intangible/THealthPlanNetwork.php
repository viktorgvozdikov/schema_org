<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THealthPlanNetwork{
	 /**
	 * Whether The costs to the patient for services under this network or formulary.
	 * @var String $healthPlanCostSharing
	 */
	protected $healthPlanCostSharing;

	 /**
	 * Name or unique ID of network. (Networks are often reused across different insurance plans).
	 * @var String $healthPlanNetworkId
	 */
	protected $healthPlanNetworkId;

	 /**
	 * The tier(s) for this network.
	 * @var String $healthPlanNetworkTier
	 */
	protected $healthPlanNetworkTier;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCostSharing($x){
		$this->healthPlanCostSharing = new Text('HealthPlanCostSharing',$x);
		return $this;
	}

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
	public function setHealthPlanNetworkTier($x){
		$this->healthPlanNetworkTier = new Text('HealthPlanNetworkTier',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THealthPlanCostSharingSpecification{
	 /**
	 * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
	 * @var String $healthPlanCoinsuranceOption
	 */
	protected $healthPlanCoinsuranceOption;

	 /**
	 * Whether The rate of coinsurance expressed as a number between 0.0 and 1.0.
	 * @var String $healthPlanCoinsuranceRate
	 */
	protected $healthPlanCoinsuranceRate;

	 /**
	 * Whether The copay amount.
	 * @var String $healthPlanCopay
	 */
	protected $healthPlanCopay;

	 /**
	 * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
	 * @var String $healthPlanCopayOption
	 */
	protected $healthPlanCopayOption;

	 /**
	 * The category or type of pharmacy associated with this cost sharing.
	 * @var String $healthPlanPharmacyCategory
	 */
	protected $healthPlanPharmacyCategory;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCoinsuranceOption($x){
		$this->healthPlanCoinsuranceOption = new Text('healthPlanCoinsuranceOption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCoinsuranceRate($x){
		$this->healthPlanCoinsuranceRate = new Text('healthPlanCoinsuranceRate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCopay($x){
		$this->healthPlanCopay = new Text('healthPlanCopay',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCopayOption($x){
		$this->healthPlanCopayOption = new Text('healthPlanCopayOption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanPharmacyCategory($x){
		$this->healthPlanPharmacyCategory = new Text('healthPlanPharmacyCategory',$x);
		return $this;
	}


}
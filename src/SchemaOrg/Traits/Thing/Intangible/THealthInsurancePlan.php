<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THealthInsurancePlan{
	 /**
	 * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
	 * @var String $benefitsSummaryUrl
	 */
	protected $benefitsSummaryUrl;

	 /**
	 * A contact point for a person or organization. Supersedes <a href="/contactPoints">contactPoints</a>.
	 * @var String $contactPoint
	 */
	protected $contactPoint;

	 /**
	 * TODO.
	 * @var String $healthPlanDrugOption
	 */
	protected $healthPlanDrugOption;

	 /**
	 * The tier(s) of drugs offered by this formulary or insurance plan.
	 * @var String $healthPlanDrugTier
	 */
	protected $healthPlanDrugTier;

	 /**
	 * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
	 * @var String $healthPlanId
	 */
	protected $healthPlanId;

	 /**
	 * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
	 * @var String $healthPlanMarketingUrl
	 */
	protected $healthPlanMarketingUrl;

	 /**
	 * Formularies covered by this plan.
	 * @var String $includesHealthPlanFormulary
	 */
	protected $includesHealthPlanFormulary;

	 /**
	 * Networks covered by this plan.
	 * @var String $includesHealthPlanNetwork
	 */
	protected $includesHealthPlanNetwork;

	 /**
	 * The standard for interpreting thePlan ID. The preferred is "HIOS". See the Centers for Medicare &amp; Medicaid Services for more details.
	 * @var String $usesHealthPlanIdStandard
	 */
	protected $usesHealthPlanIdStandard;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBenefitsSummaryUrl($x){
		$this->benefitsSummaryUrl = new Text('benefitsSummaryUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactPoint($x){
		$this->contactPoint = new Text('contactPoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanDrugOption($x){
		$this->healthPlanDrugOption = new Text('healthPlanDrugOption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanDrugTier($x){
		$this->healthPlanDrugTier = new Text('healthPlanDrugTier',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanId($x){
		$this->healthPlanId = new Text('healthPlanId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanMarketingUrl($x){
		$this->healthPlanMarketingUrl = new Text('healthPlanMarketingUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludesHealthPlanFormulary($x){
		$this->includesHealthPlanFormulary = new Text('includesHealthPlanFormulary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludesHealthPlanNetwork($x){
		$this->includesHealthPlanNetwork = new Text('includesHealthPlanNetwork',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUsesHealthPlanIdStandard($x){
		$this->usesHealthPlanIdStandard = new Text('usesHealthPlanIdStandard',$x);
		return $this;
	}


}
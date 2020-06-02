<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THealthPlanFormulary{
	 /**
	 * Whether The costs to the patient for services under this network or formulary.
	 * @var String $healthPlanCostSharing
	 */
	protected $healthPlanCostSharing;

	 /**
	 * The tier(s) of drugs offered by this formulary or insurance plan.
	 * @var String $healthPlanDrugTier
	 */
	protected $healthPlanDrugTier;

	 /**
	 * Whether prescriptions can be delivered by mail.
	 * @var String $offersPrescriptionByMail
	 */
	protected $offersPrescriptionByMail;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHealthPlanCostSharing($x){
		$this->healthPlanCostSharing = new Text('healthPlanCostSharing',$x);
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
	public function setOffersPrescriptionByMail($x){
		$this->offersPrescriptionByMail = new Text('offersPrescriptionByMail',$x);
		return $this;
	}


}
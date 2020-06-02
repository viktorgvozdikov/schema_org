<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\Substance;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDrug{
	 /**
	 * A route by which this drug may be administered, e.g. 'oral'.
	 * @var String $administrationRoute
	 */
	protected $administrationRoute;

	 /**
	 * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
	 * @var String $alcoholWarning
	 */
	protected $alcoholWarning;

	 /**
	 * An available dosage strength for the drug.
	 * @var String $availableStrength
	 */
	protected $availableStrength;

	 /**
	 * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
	 * @var String $breastfeedingWarning
	 */
	protected $breastfeedingWarning;

	 /**
	 * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD). Supersedes <a href="/clincalPharmacology">clincalPharmacology</a>.
	 * @var String $clinicalPharmacology
	 */
	protected $clinicalPharmacology;

	 /**
	 * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
	 * @var String $dosageForm
	 */
	protected $dosageForm;

	 /**
	 * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
	 * @var String $doseSchedule
	 */
	protected $doseSchedule;

	 /**
	 * The class of drug this belongs to (e.g., statins).
	 * @var String $drugClass
	 */
	protected $drugClass;

	 /**
	 * The unit in which the drug is measured, e.g. '5 mg tablet'.
	 * @var String $drugUnit
	 */
	protected $drugUnit;

	 /**
	 * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
	 * @var String $foodWarning
	 */
	protected $foodWarning;

	 /**
	 * The insurance plans that cover this drug.
	 * @var String $includedInHealthInsurancePlan
	 */
	protected $includedInHealthInsurancePlan;

	 /**
	 * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
	 * @var String $interactingDrug
	 */
	protected $interactingDrug;

	 /**
	 * True if the drug is available in a generic form (regardless of name).
	 * @var String $isAvailableGenerically
	 */
	protected $isAvailableGenerically;

	 /**
	 * True if this item's name is a proprietary/brand name (vs. generic name).
	 * @var String $isProprietary
	 */
	protected $isProprietary;

	 /**
	 * Link to the drug's label details.
	 * @var String $labelDetails
	 */
	protected $labelDetails;

	 /**
	 * The manufacturer of the product.
	 * @var String $manufacturer
	 */
	protected $manufacturer;

	 /**
	 * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
	 * @var String $mechanismOfAction
	 */
	protected $mechanismOfAction;

	 /**
	 * The generic name of this drug or supplement.
	 * @var String $nonProprietaryName
	 */
	protected $nonProprietaryName;

	 /**
	 * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
	 * @var String $overdosage
	 */
	protected $overdosage;

	 /**
	 * Pregnancy category of this drug.
	 * @var String $pregnancyCategory
	 */
	protected $pregnancyCategory;

	 /**
	 * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
	 * @var String $pregnancyWarning
	 */
	protected $pregnancyWarning;

	 /**
	 * Link to prescribing information for the drug.
	 * @var String $prescribingInfo
	 */
	protected $prescribingInfo;

	 /**
	 * Indicates the status of drug prescription eg. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
	 * @var String $prescriptionStatus
	 */
	protected $prescriptionStatus;

	 /**
	 * Proprietary name given to the diet plan, typically by its originator or creator.
	 * @var String $proprietaryName
	 */
	protected $proprietaryName;

	 /**
	 * Any other drug related to this one, for example commonly-prescribed alternatives.
	 * @var String $relatedDrug
	 */
	protected $relatedDrug;

	 /**
	 * The RxCUI drug identifier from RXNORM.
	 * @var String $rxcui
	 */
	protected $rxcui;

	 /**
	 * Any FDA or other warnings about the drug (text or URL).
	 * @var String $warning
	 */
	protected $warning;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdministrationRoute($x){
		$this->administrationRoute = new Text('AdministrationRoute',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlcoholWarning($x){
		$this->alcoholWarning = new Text('AlcoholWarning',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableStrength($x){
		$this->availableStrength = new Text('AvailableStrength',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBreastfeedingWarning($x){
		$this->breastfeedingWarning = new Text('BreastfeedingWarning',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setClinicalPharmacology($x){
		$this->clinicalPharmacology = new Text('ClinicalPharmacology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDosageForm($x){
		$this->dosageForm = new Text('DosageForm',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDoseSchedule($x){
		$this->doseSchedule = new Text('DoseSchedule',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrugClass($x){
		$this->drugClass = new Text('DrugClass',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrugUnit($x){
		$this->drugUnit = new Text('DrugUnit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFoodWarning($x){
		$this->foodWarning = new Text('FoodWarning',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludedInHealthInsurancePlan($x){
		$this->includedInHealthInsurancePlan = new Text('IncludedInHealthInsurancePlan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractingDrug($x){
		$this->interactingDrug = new Text('InteractingDrug',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAvailableGenerically($x){
		$this->isAvailableGenerically = new Text('IsAvailableGenerically',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsProprietary($x){
		$this->isProprietary = new Text('IsProprietary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLabelDetails($x){
		$this->labelDetails = new Text('LabelDetails',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setManufacturer($x){
		$this->manufacturer = new Text('Manufacturer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMechanismOfAction($x){
		$this->mechanismOfAction = new Text('MechanismOfAction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNonProprietaryName($x){
		$this->nonProprietaryName = new Text('NonProprietaryName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOverdosage($x){
		$this->overdosage = new Text('Overdosage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPregnancyCategory($x){
		$this->pregnancyCategory = new Text('PregnancyCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPregnancyWarning($x){
		$this->pregnancyWarning = new Text('PregnancyWarning',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrescribingInfo($x){
		$this->prescribingInfo = new Text('PrescribingInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrescriptionStatus($x){
		$this->prescriptionStatus = new Text('PrescriptionStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProprietaryName($x){
		$this->proprietaryName = new Text('ProprietaryName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedDrug($x){
		$this->relatedDrug = new Text('RelatedDrug',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRxcui($x){
		$this->rxcui = new Text('Rxcui',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWarning($x){
		$this->warning = new Text('Warning',$x);
		return $this;
	}


}
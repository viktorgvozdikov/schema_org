<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\Substance;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDietarySupplement{
	 /**
	 * True if this item's name is a proprietary/brand name (vs. generic name).
	 * @var String $isProprietary
	 */
	protected $isProprietary;

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
	 * Proprietary name given to the diet plan, typically by its originator or creator.
	 * @var String $proprietaryName
	 */
	protected $proprietaryName;

	 /**
	 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
	 * @var String $recommendedIntake
	 */
	protected $recommendedIntake;

	 /**
	 * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
	 * @var String $safetyConsideration
	 */
	protected $safetyConsideration;

	 /**
	 * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
	 * @var String $targetPopulation
	 */
	protected $targetPopulation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsProprietary($x){
		$this->isProprietary = new Text('isProprietary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setManufacturer($x){
		$this->manufacturer = new Text('manufacturer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMechanismOfAction($x){
		$this->mechanismOfAction = new Text('mechanismOfAction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNonProprietaryName($x){
		$this->nonProprietaryName = new Text('nonProprietaryName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProprietaryName($x){
		$this->proprietaryName = new Text('proprietaryName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecommendedIntake($x){
		$this->recommendedIntake = new Text('recommendedIntake',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSafetyConsideration($x){
		$this->safetyConsideration = new Text('safetyConsideration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetPopulation($x){
		$this->targetPopulation = new Text('targetPopulation',$x);
		return $this;
	}


}
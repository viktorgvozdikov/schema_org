<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalCondition{
	 /**
	 * The anatomy of the underlying organ system or structures associated with this entity.
	 * @var String $associatedAnatomy
	 */
	protected $associatedAnatomy;

	 /**
	 * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
	 * @var String $differentialDiagnosis
	 */
	protected $differentialDiagnosis;

	 /**
	 * Specifying a drug or medicine used in a medication procedure
	 * @var String $drug
	 */
	protected $drug;

	 /**
	 * The characteristics of associated patients, such as age, gender, race etc.
	 * @var String $epidemiology
	 */
	protected $epidemiology;

	 /**
	 * The likely outcome in either the short term or long term of the medical condition.
	 * @var String $expectedPrognosis
	 */
	protected $expectedPrognosis;

	 /**
	 * The expected progression of the condition if it is not treated and allowed to progress naturally.
	 * @var String $naturalProgression
	 */
	protected $naturalProgression;

	 /**
	 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
	 * @var String $pathophysiology
	 */
	protected $pathophysiology;

	 /**
	 * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
	 * @var String $possibleComplication
	 */
	protected $possibleComplication;

	 /**
	 * A possible treatment to address this condition, sign or symptom.
	 * @var String $possibleTreatment
	 */
	protected $possibleTreatment;

	 /**
	 * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
	 * @var String $primaryPrevention
	 */
	protected $primaryPrevention;

	 /**
	 * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
	 * @var String $riskFactor
	 */
	protected $riskFactor;

	 /**
	 * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
	 * @var String $secondaryPrevention
	 */
	protected $secondaryPrevention;

	 /**
	 * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
	 * @var String $signOrSymptom
	 */
	protected $signOrSymptom;

	 /**
	 * The stage of the condition, if applicable.
	 * @var String $stage
	 */
	protected $stage;

	 /**
	 * The status of the study (enumerated).
	 * @var String $status
	 */
	protected $status;

	 /**
	 * A medical test typically performed given this condition.
	 * @var String $typicalTest
	 */
	protected $typicalTest;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedAnatomy($x){
		$this->associatedAnatomy = new Text('associatedAnatomy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDifferentialDiagnosis($x){
		$this->differentialDiagnosis = new Text('differentialDiagnosis',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrug($x){
		$this->drug = new Text('drug',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEpidemiology($x){
		$this->epidemiology = new Text('epidemiology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectedPrognosis($x){
		$this->expectedPrognosis = new Text('expectedPrognosis',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNaturalProgression($x){
		$this->naturalProgression = new Text('naturalProgression',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPathophysiology($x){
		$this->pathophysiology = new Text('pathophysiology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPossibleComplication($x){
		$this->possibleComplication = new Text('possibleComplication',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPossibleTreatment($x){
		$this->possibleTreatment = new Text('possibleTreatment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrimaryPrevention($x){
		$this->primaryPrevention = new Text('primaryPrevention',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRiskFactor($x){
		$this->riskFactor = new Text('riskFactor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSecondaryPrevention($x){
		$this->secondaryPrevention = new Text('secondaryPrevention',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSignOrSymptom($x){
		$this->signOrSymptom = new Text('signOrSymptom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStage($x){
		$this->stage = new Text('stage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStatus($x){
		$this->status = new Text('status',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypicalTest($x){
		$this->typicalTest = new Text('typicalTest',$x);
		return $this;
	}


}
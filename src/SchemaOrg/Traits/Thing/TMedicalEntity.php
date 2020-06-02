<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalEntity{
	 /**
	 * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
	 * @var String $code
	 */
	protected $code;

	 /**
	 * A medical guideline related to this entity.
	 * @var String $guideline
	 */
	protected $guideline;

	 /**
	 * The drug or supplement's legal status, including any controlled substance schedules that apply.
	 * @var String $legalStatus
	 */
	protected $legalStatus;

	 /**
	 * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
	 * @var String $medicineSystem
	 */
	protected $medicineSystem;

	 /**
	 * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
	 * @var String $recognizingAuthority
	 */
	protected $recognizingAuthority;

	 /**
	 * If applicable, a medical specialty in which this entity is relevant.
	 * @var String $relevantSpecialty
	 */
	protected $relevantSpecialty;

	 /**
	 * A medical study or trial related to this entity.
	 * @var String $study
	 */
	protected $study;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCode($x){
		$this->code = new Text('Code',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGuideline($x){
		$this->guideline = new Text('Guideline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegalStatus($x){
		$this->legalStatus = new Text('LegalStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMedicineSystem($x){
		$this->medicineSystem = new Text('MedicineSystem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecognizingAuthority($x){
		$this->recognizingAuthority = new Text('RecognizingAuthority',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelevantSpecialty($x){
		$this->relevantSpecialty = new Text('RelevantSpecialty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStudy($x){
		$this->study = new Text('Study',$x);
		return $this;
	}


}
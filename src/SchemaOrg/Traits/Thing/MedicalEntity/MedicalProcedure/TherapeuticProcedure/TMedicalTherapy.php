<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalTherapy{
	 /**
	 * A contraindication for this therapy.
	 * @var String $contraindication
	 */
	protected $contraindication;

	 /**
	 * A therapy that duplicates or overlaps this one.
	 * @var String $duplicateTherapy
	 */
	protected $duplicateTherapy;

	 /**
	 * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
	 * @var String $seriousAdverseOutcome
	 */
	protected $seriousAdverseOutcome;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setContraindication($x){
		$this->contraindication = new Text('Contraindication',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuplicateTherapy($x){
		$this->duplicateTherapy = new Text('DuplicateTherapy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeriousAdverseOutcome($x){
		$this->seriousAdverseOutcome = new Text('SeriousAdverseOutcome',$x);
		return $this;
	}


}
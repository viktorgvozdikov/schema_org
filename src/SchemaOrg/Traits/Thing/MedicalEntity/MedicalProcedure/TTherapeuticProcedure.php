<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTherapeuticProcedure{
	 /**
	 * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
	 * @var String $adverseOutcome
	 */
	protected $adverseOutcome;

	 /**
	 * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
	 * @var String $doseSchedule
	 */
	protected $doseSchedule;

	 /**
	 * Specifying a drug or medicine used in a medication procedure
	 * @var String $drug
	 */
	protected $drug;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdverseOutcome($x){
		$this->adverseOutcome = new Text('AdverseOutcome',$x);
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
	public function setDrug($x){
		$this->drug = new Text('Drug',$x);
		return $this;
	}


}
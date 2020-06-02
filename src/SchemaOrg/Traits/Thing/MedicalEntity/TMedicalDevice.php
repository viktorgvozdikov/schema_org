<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalDevice{
	 /**
	 * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
	 * @var String $adverseOutcome
	 */
	protected $adverseOutcome;

	 /**
	 * A contraindication for this therapy.
	 * @var String $contraindication
	 */
	protected $contraindication;

	 /**
	 * A description of the postoperative procedures, care, and/or followups for this device.
	 * @var String $postOp
	 */
	protected $postOp;

	 /**
	 * A description of the workup, testing, and other preparations required before implanting this device.
	 * @var String $preOp
	 */
	protected $preOp;

	 /**
	 * A description of the procedure involved in setting up, using, and/or installing the device.
	 * @var String $procedure
	 */
	protected $procedure;

	 /**
	 * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
	 * @var String $seriousAdverseOutcome
	 */
	protected $seriousAdverseOutcome;


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
	public function setContraindication($x){
		$this->contraindication = new Text('Contraindication',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostOp($x){
		$this->postOp = new Text('PostOp',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPreOp($x){
		$this->preOp = new Text('PreOp',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProcedure($x){
		$this->procedure = new Text('Procedure',$x);
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
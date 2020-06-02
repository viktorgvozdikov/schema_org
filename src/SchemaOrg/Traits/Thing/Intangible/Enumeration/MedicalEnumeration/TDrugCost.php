<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDrugCost{
	 /**
	 * The location in which the status applies.
	 * @var String $applicableLocation
	 */
	protected $applicableLocation;

	 /**
	 * The category of cost, such as wholesale, retail, reimbursement cap, etc.
	 * @var String $costCategory
	 */
	protected $costCategory;

	 /**
	 * The currency (in 3-letter of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217
	 * @var String $costCurrency
	 */
	protected $costCurrency;

	 /**
	 * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
	 * @var String $costOrigin
	 */
	protected $costOrigin;

	 /**
	 * The cost per unit of the drug.
	 * @var String $costPerUnit
	 */
	protected $costPerUnit;

	 /**
	 * The unit in which the drug is measured, e.g. '5 mg tablet'.
	 * @var String $drugUnit
	 */
	protected $drugUnit;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicableLocation($x){
		$this->applicableLocation = new Text('ApplicableLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCostCategory($x){
		$this->costCategory = new Text('CostCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCostCurrency($x){
		$this->costCurrency = new Text('CostCurrency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCostOrigin($x){
		$this->costOrigin = new Text('CostOrigin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCostPerUnit($x){
		$this->costPerUnit = new Text('CostPerUnit',$x);
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


}
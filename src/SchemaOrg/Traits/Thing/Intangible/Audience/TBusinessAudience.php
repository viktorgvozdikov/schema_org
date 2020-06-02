<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBusinessAudience{
	 /**
	 * The number of employees in an organization e.g. business.
	 * @var String $numberOfEmployees
	 */
	protected $numberOfEmployees;

	 /**
	 * The size of the business in annual revenue.
	 * @var String $yearlyRevenue
	 */
	protected $yearlyRevenue;

	 /**
	 * The age of the business.
	 * @var String $yearsInOperation
	 */
	protected $yearsInOperation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfEmployees($x){
		$this->numberOfEmployees = new Text('NumberOfEmployees',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setYearlyRevenue($x){
		$this->yearlyRevenue = new Text('YearlyRevenue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setYearsInOperation($x){
		$this->yearsInOperation = new Text('YearsInOperation',$x);
		return $this;
	}


}
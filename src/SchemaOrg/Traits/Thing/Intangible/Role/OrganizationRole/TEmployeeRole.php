<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role\OrganizationRole;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEmployeeRole{
	 /**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * @var String $baseSalary
	 */
	protected $baseSalary;

	 /**
	 * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
	 * @var String $salaryCurrency
	 */
	protected $salaryCurrency;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBaseSalary($x){
		$this->baseSalary = new Text('baseSalary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSalaryCurrency($x){
		$this->salaryCurrency = new Text('salaryCurrency',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFinancialProduct{
	 /**
	 * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
	 * @var String $annualPercentageRate
	 */
	protected $annualPercentageRate;

	 /**
	 * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	 * @var String $feesAndCommissionsSpecification
	 */
	protected $feesAndCommissionsSpecification;

	 /**
	 * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
	 * @var String $interestRate
	 */
	protected $interestRate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAnnualPercentageRate($x){
		$this->annualPercentageRate = new Text('annualPercentageRate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFeesAndCommissionsSpecification($x){
		$this->feesAndCommissionsSpecification = new Text('feesAndCommissionsSpecification',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInterestRate($x){
		$this->interestRate = new Text('interestRate',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRepaymentSpecification{
	 /**
	 * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
	 * @var String $downPayment
	 */
	protected $downPayment;

	 /**
	 * The amount to be paid as a penalty in the event of early payment of the loan.
	 * @var String $earlyPrepaymentPenalty
	 */
	protected $earlyPrepaymentPenalty;

	 /**
	 * The amount of money to pay in a single payment.
	 * @var String $loanPaymentAmount
	 */
	protected $loanPaymentAmount;

	 /**
	 * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
	 * @var String $loanPaymentFrequency
	 */
	protected $loanPaymentFrequency;

	 /**
	 * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
	 * @var String $numberOfLoanPayments
	 */
	protected $numberOfLoanPayments;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDownPayment($x){
		$this->downPayment = new Text('DownPayment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEarlyPrepaymentPenalty($x){
		$this->earlyPrepaymentPenalty = new Text('EarlyPrepaymentPenalty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanPaymentAmount($x){
		$this->loanPaymentAmount = new Text('LoanPaymentAmount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanPaymentFrequency($x){
		$this->loanPaymentFrequency = new Text('LoanPaymentFrequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfLoanPayments($x){
		$this->numberOfLoanPayments = new Text('NumberOfLoanPayments',$x);
		return $this;
	}


}
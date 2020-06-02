<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLoanOrCredit{
	 /**
	 * The amount of money.
	 * @var String $amount
	 */
	protected $amount;

	 /**
	 * The currency in which the monetary amount is expressed.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $currency
	 */
	protected $currency;

	 /**
	 * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
	 * @var String $gracePeriod
	 */
	protected $gracePeriod;

	 /**
	 * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
	 * @var String $loanRepaymentForm
	 */
	protected $loanRepaymentForm;

	 /**
	 * The duration of the loan or credit agreement.
	 * @var String $loanTerm
	 */
	protected $loanTerm;

	 /**
	 * The type of a loan or credit.
	 * @var String $loanType
	 */
	protected $loanType;

	 /**
	 * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
	 * @var String $recourseLoan
	 */
	protected $recourseLoan;

	 /**
	 * Whether the terms for payment of interest can be renegotiated during the life of the loan.
	 * @var String $renegotiableLoan
	 */
	protected $renegotiableLoan;

	 /**
	 * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
	 * @var String $requiredCollateral
	 */
	protected $requiredCollateral;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmount($x){
		$this->amount = new Text('amount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCurrency($x){
		$this->currency = new Text('currency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGracePeriod($x){
		$this->gracePeriod = new Text('gracePeriod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanRepaymentForm($x){
		$this->loanRepaymentForm = new Text('loanRepaymentForm',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanTerm($x){
		$this->loanTerm = new Text('loanTerm',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanType($x){
		$this->loanType = new Text('loanType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecourseLoan($x){
		$this->recourseLoan = new Text('recourseLoan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRenegotiableLoan($x){
		$this->renegotiableLoan = new Text('renegotiableLoan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiredCollateral($x){
		$this->requiredCollateral = new Text('requiredCollateral',$x);
		return $this;
	}


}
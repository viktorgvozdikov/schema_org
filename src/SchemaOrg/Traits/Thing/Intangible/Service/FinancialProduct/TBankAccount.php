<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBankAccount{
	 /**
	 * A minimum amount that has to be paid in every month.
	 * @var String $accountMinimumInflow
	 */
	protected $accountMinimumInflow;

	 /**
	 * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
	 * @var String $accountOverdraftLimit
	 */
	protected $accountOverdraftLimit;

	 /**
	 * The type of a bank account.
	 * @var String $bankAccountType
	 */
	protected $bankAccountType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccountMinimumInflow($x){
		$this->accountMinimumInflow = new Text('AccountMinimumInflow',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccountOverdraftLimit($x){
		$this->accountOverdraftLimit = new Text('AccountOverdraftLimit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBankAccountType($x){
		$this->bankAccountType = new Text('BankAccountType',$x);
		return $this;
	}


}
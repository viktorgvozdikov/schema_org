<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMoneyTransfer{
	 /**
	 * The amount of money.
	 * @var String $amount
	 */
	protected $amount;

	 /**
	 * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary
	 * @var String $beneficiaryBank
	 */
	protected $beneficiaryBank;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmount($x){
		$this->amount = new Text('Amount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBeneficiaryBank($x){
		$this->beneficiaryBank = new Text('BeneficiaryBank',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TInvestmentOrDeposit{
	 /**
	 * The amount of money.
	 * @var String $amount
	 */
	protected $amount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmount($x){
		$this->amount = new Text('Amount',$x);
		return $this;
	}


}
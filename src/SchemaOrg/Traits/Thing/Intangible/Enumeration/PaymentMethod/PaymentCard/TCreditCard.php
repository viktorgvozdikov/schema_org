<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCreditCard{
	 /**
	 * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
	 * @var String $monthlyMinimumRepaymentAmount
	 */
	protected $monthlyMinimumRepaymentAmount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMonthlyMinimumRepaymentAmount($x){
		$this->monthlyMinimumRepaymentAmount = new Text('MonthlyMinimumRepaymentAmount',$x);
		return $this;
	}


}
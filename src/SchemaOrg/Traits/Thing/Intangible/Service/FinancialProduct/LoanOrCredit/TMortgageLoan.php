<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMortgageLoan{
	 /**
	 * Whether borrower is a resident of the jurisdiction where the property is located.
	 * @var String $domiciledMortgage
	 */
	protected $domiciledMortgage;

	 /**
	 * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
	 * @var String $loanMortgageMandateAmount
	 */
	protected $loanMortgageMandateAmount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDomiciledMortgage($x){
		$this->domiciledMortgage = new Text('DomiciledMortgage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoanMortgageMandateAmount($x){
		$this->loanMortgageMandateAmount = new Text('LoanMortgageMandateAmount',$x);
		return $this;
	}


}
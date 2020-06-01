<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\PaymentMethod\TPaymentCard;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\TLoanOrCredit;

trait TCreditCard{
	use TPaymentCard;
	use TLoanOrCredit;

	protected $type = 'CreditCard';
}
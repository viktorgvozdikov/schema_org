<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\TPaymentCard;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\TLoanOrCredit;

trait TCreditCard{
	use TPaymentCard;
	use TLoanOrCredit;

}
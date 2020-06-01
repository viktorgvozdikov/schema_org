<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard;

use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\TPaymentCard;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\TLoanOrCredit;

trait TCreditCard{
	use TPaymentCard;
	use TLoanOrCredit;

}
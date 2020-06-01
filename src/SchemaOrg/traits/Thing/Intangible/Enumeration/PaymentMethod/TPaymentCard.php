<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\PaymentMethod;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TPaymentMethod;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\TFinancialProduct;

trait TPaymentCard{
	use TPaymentMethod;
	use TFinancialProduct;

	protected $type = 'PaymentCard';
}
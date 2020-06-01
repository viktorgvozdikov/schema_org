<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct;

use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TPaymentMethod;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\TFinancialProduct;

trait TPaymentCard{
	use TPaymentMethod;
	use TFinancialProduct;

}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\PaymentStatusType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TPaymentStatusType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentStatusType\TPaymentDeclined;


class PaymentDeclined extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TPaymentStatusType;
	use TPaymentDeclined;
}
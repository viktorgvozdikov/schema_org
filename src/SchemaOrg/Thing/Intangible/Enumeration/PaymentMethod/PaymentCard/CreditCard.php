<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TPaymentMethod;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\TPaymentCard;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard\TCreditCard;


class CreditCard extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TPaymentMethod;
	use TPaymentCard;
	use TCreditCard;
}
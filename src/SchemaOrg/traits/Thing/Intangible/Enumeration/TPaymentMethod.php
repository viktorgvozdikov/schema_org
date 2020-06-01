<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TEnumeration;

trait TPaymentMethod{
	use TEnumeration;

	protected $type = 'PaymentMethod';
}
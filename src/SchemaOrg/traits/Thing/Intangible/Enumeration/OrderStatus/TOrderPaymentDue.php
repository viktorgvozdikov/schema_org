<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TOrderStatus;

trait TOrderPaymentDue{
	use TOrderStatus;

	protected $type = 'OrderPaymentDue';
}
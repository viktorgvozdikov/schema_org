<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TOrderStatus;

trait TOrderDelivered{
	use TOrderStatus;

	protected $type = 'OrderDelivered';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TOrderStatus;

trait TOrderCancelled{
	use TOrderStatus;

	protected $type = 'OrderCancelled';
}
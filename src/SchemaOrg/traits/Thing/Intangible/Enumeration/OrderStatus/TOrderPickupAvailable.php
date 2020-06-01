<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TOrderStatus;

trait TOrderPickupAvailable{
	use TOrderStatus;

	protected $type = 'OrderPickupAvailable';
}
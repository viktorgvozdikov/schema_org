<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TOrderStatus;

trait TOrderProblem{
	use TOrderStatus;

	protected $type = 'OrderProblem';
}
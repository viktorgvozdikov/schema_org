<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemAvailability;

trait TLimitedAvailability{
	use TItemAvailability;

	protected $type = 'LimitedAvailability';
}
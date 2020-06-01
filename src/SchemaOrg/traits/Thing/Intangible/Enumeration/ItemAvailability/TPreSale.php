<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemAvailability;

trait TPreSale{
	use TItemAvailability;

	protected $type = 'PreSale';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemAvailability;

trait TInStoreOnly{
	use TItemAvailability;

	protected $type = 'InStoreOnly';
}
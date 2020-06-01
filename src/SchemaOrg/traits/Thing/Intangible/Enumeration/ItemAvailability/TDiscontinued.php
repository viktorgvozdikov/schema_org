<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemAvailability;

trait TDiscontinued{
	use TItemAvailability;

	protected $type = 'Discontinued';
}
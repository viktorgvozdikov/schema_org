<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RestrictedDiet;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRestrictedDiet;

trait TLowSaltDiet{
	use TRestrictedDiet;

	protected $type = 'LowSaltDiet';
}
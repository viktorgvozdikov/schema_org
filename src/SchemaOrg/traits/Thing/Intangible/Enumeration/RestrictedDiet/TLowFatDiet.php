<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RestrictedDiet;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRestrictedDiet;

trait TLowFatDiet{
	use TRestrictedDiet;

	protected $type = 'LowFatDiet';
}
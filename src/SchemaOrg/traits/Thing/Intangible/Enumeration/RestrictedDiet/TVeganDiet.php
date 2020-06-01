<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RestrictedDiet;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRestrictedDiet;

trait TVeganDiet{
	use TRestrictedDiet;

	protected $type = 'VeganDiet';
}
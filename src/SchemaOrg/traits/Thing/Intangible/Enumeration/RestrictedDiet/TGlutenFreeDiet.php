<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RestrictedDiet;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRestrictedDiet;

trait TGlutenFreeDiet{
	use TRestrictedDiet;

	protected $type = 'GlutenFreeDiet';
}
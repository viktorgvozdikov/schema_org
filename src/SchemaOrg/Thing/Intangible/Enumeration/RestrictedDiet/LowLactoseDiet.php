<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\RestrictedDiet;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TRestrictedDiet;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\RestrictedDiet\TLowLactoseDiet;


class LowLactoseDiet extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TRestrictedDiet;
	use TLowLactoseDiet;
}
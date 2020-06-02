<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TBoardingPolicyType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\BoardingPolicyType\TZoneBoardingPolicy;


class ZoneBoardingPolicy extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TBoardingPolicyType;
	use TZoneBoardingPolicy;
}
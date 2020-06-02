<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\NonprofitType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TNonprofitType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\NonprofitType\TNLNonprofitType;


class NLNonprofitType extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TNonprofitType;
	use TNLNonprofitType;
}
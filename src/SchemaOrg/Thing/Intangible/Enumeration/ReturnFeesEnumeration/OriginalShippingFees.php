<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ReturnFeesEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TReturnFeesEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ReturnFeesEnumeration\TOriginalShippingFees;


class OriginalShippingFees extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TReturnFeesEnumeration;
	use TOriginalShippingFees;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TItemAvailability;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ItemAvailability\TInStoreOnly;


class InStoreOnly extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TItemAvailability;
	use TInStoreOnly;
}
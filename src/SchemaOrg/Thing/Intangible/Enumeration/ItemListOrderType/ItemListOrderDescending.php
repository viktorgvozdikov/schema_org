<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ItemListOrderType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TItemListOrderType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ItemListOrderType\TItemListOrderDescending;


class ItemListOrderDescending extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TItemListOrderType;
	use TItemListOrderDescending;
}
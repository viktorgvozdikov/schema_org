<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TOrderStatus;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\OrderStatus\TOrderReturned;


class OrderReturned extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TOrderStatus;
	use TOrderReturned;
}
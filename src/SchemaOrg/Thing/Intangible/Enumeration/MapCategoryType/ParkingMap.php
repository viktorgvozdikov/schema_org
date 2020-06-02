<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MapCategoryType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMapCategoryType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MapCategoryType\TParkingMap;


class ParkingMap extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMapCategoryType;
	use TParkingMap;
}
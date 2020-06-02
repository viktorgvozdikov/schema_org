<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TDayOfWeek;


class DayOfWeek extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TDayOfWeek;
}
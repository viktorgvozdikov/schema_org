<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TContactPointOption;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ContactPointOption\TTollFree;


class TollFree extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TContactPointOption;
	use TTollFree;
}
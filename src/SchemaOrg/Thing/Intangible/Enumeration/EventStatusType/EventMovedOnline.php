<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TEventStatusType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\EventStatusType\TEventMovedOnline;


class EventMovedOnline extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TEventStatusType;
	use TEventMovedOnline;
}
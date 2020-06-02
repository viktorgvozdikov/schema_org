<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\HealthAspectEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\THealthAspectEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\HealthAspectEnumeration\TStagesHealthAspect;


class StagesHealthAspect extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use THealthAspectEnumeration;
	use TStagesHealthAspect;
}
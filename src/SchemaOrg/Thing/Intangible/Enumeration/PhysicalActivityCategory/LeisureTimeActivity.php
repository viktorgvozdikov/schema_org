<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TPhysicalActivityCategory;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\PhysicalActivityCategory\TLeisureTimeActivity;


class LeisureTimeActivity extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TPhysicalActivityCategory;
	use TLeisureTimeActivity;
}
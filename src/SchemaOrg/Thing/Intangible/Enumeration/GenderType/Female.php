<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\GenderType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TGenderType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\GenderType\TFemale;


class Female extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TGenderType;
	use TFemale;
}
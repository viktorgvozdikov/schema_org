<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TQualitativeValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\QualitativeValue\TBedType;


class BedType extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TQualitativeValue;
	use TBedType;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MusicReleaseFormatType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMusicReleaseFormatType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MusicReleaseFormatType\TCDFormat;


class CDFormat extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMusicReleaseFormatType;
	use TCDFormat;
}
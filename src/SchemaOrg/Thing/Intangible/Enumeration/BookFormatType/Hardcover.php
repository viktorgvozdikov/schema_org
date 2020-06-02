<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TBookFormatType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\BookFormatType\THardcover;


class Hardcover extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TBookFormatType;
	use THardcover;
}
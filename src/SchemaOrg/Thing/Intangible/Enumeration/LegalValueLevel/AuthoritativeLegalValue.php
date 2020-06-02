<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\LegalValueLevel;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TLegalValueLevel;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\LegalValueLevel\TAuthoritativeLegalValue;


class AuthoritativeLegalValue extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TLegalValueLevel;
	use TAuthoritativeLegalValue;
}
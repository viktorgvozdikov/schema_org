<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMediaManipulationRatingEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration\TAuthenticContent;


class AuthenticContent extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMediaManipulationRatingEnumeration;
	use TAuthenticContent;
}
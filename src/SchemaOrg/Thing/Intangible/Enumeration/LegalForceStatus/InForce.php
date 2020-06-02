<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\LegalForceStatus;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TLegalForceStatus;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\LegalForceStatus\TInForce;


class InForce extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TLegalForceStatus;
	use TInForce;
}
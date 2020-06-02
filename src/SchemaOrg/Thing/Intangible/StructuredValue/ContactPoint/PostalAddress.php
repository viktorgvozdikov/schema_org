<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TContactPoint;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\ContactPoint\TPostalAddress;


class PostalAddress extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TContactPoint;
	use TPostalAddress;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TPropertyValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PropertyValue\TLocationFeatureSpecification;


class LocationFeatureSpecification extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TPropertyValue;
	use TLocationFeatureSpecification;
}
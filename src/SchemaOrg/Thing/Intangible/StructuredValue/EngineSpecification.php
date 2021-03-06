<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TEngineSpecification;


class EngineSpecification extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TEngineSpecification;
}
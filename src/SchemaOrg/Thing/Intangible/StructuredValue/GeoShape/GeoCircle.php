<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TGeoShape;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\GeoShape\TGeoCircle;


class GeoCircle extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TGeoShape;
	use TGeoCircle;
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TStructuredValue;

trait TGeoCoordinates{
	use TStructuredValue;

	protected $type = 'GeoCoordinates';
}
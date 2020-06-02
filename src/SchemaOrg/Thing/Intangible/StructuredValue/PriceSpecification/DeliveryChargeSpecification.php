<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TPriceSpecification;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PriceSpecification\TDeliveryChargeSpecification;


class DeliveryChargeSpecification extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TPriceSpecification;
	use TDeliveryChargeSpecification;
}
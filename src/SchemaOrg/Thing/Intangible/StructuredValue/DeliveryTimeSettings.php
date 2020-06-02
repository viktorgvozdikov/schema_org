<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TDeliveryTimeSettings;


class DeliveryTimeSettings extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TDeliveryTimeSettings;
}
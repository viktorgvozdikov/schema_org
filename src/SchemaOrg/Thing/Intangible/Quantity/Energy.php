<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Quantity;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TQuantity;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Quantity\TEnergy;


class Energy extends Thing{
	use TThing;
	use TIntangible;
	use TQuantity;
	use TEnergy;
}
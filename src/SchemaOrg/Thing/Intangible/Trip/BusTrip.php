<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Trip;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TTrip;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Trip\TBusTrip;


class BusTrip extends Thing{
	use TThing;
	use TIntangible;
	use TTrip;
	use TBusTrip;
}
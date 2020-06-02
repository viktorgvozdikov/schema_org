<?php

namespace ModuleBZ\SchemaOrg\Thing\Product\Vehicle;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TProduct;
use ModuleBZ\SchemaOrg\Traits\Thing\Product\TVehicle;
use ModuleBZ\SchemaOrg\Traits\Thing\Product\Vehicle\TMotorizedBicycle;


class MotorizedBicycle extends Thing{
	use TThing;
	use TProduct;
	use TVehicle;
	use TMotorizedBicycle;
}
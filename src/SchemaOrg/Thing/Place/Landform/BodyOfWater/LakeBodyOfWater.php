<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Landform\BodyOfWater;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TLandform;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Landform\TBodyOfWater;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Landform\BodyOfWater\TLakeBodyOfWater;


class LakeBodyOfWater extends Thing{
	use TThing;
	use TPlace;
	use TLandform;
	use TBodyOfWater;
	use TLakeBodyOfWater;
}
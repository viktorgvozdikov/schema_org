<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TCivicStructure;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure\TSubwayStation;


class SubwayStation extends Thing{
	use TThing;
	use TPlace;
	use TCivicStructure;
	use TSubwayStation;
}
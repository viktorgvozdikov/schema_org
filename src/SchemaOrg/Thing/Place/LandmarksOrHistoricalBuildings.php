<?php

namespace ModuleBZ\SchemaOrg\Thing\Place;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TLandmarksOrHistoricalBuildings;


class LandmarksOrHistoricalBuildings extends Thing{
	use TThing;
	use TPlace;
	use TLandmarksOrHistoricalBuildings;
}
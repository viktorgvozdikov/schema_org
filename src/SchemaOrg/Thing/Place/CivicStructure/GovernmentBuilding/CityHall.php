<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\CivicStructure\GovernmentBuilding;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TCivicStructure;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure\TGovernmentBuilding;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure\GovernmentBuilding\TCityHall;


class CityHall extends Thing{
	use TThing;
	use TPlace;
	use TCivicStructure;
	use TGovernmentBuilding;
	use TCityHall;
}
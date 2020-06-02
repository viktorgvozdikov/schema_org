<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Landform;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TLandform;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Landform\TContinent;


class Continent extends Thing{
	use TThing;
	use TPlace;
	use TLandform;
	use TContinent;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\CivicStructure\PlaceOfWorship;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TCivicStructure;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure\TPlaceOfWorship;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure\PlaceOfWorship\THinduTemple;


class HinduTemple extends Thing{
	use TThing;
	use TPlace;
	use TCivicStructure;
	use TPlaceOfWorship;
	use THinduTemple;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Landform;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TLandform;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Landform\TVolcano;


class Volcano extends Thing{
	use TThing;
	use TPlace;
	use TLandform;
	use TVolcano;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Place;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TAccommodation;


class Accommodation extends Thing{
	use TThing;
	use TPlace;
	use TAccommodation;
}
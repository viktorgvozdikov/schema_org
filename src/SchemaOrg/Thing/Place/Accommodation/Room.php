<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Accommodation;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TAccommodation;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Accommodation\TRoom;


class Room extends Thing{
	use TThing;
	use TPlace;
	use TAccommodation;
	use TRoom;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Accommodation\House;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TAccommodation;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Accommodation\THouse;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Accommodation\House\TSingleFamilyResidence;


class SingleFamilyResidence extends Thing{
	use TThing;
	use TPlace;
	use TAccommodation;
	use THouse;
	use TSingleFamilyResidence;
}
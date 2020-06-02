<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\AdministrativeArea;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TAdministrativeArea;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\AdministrativeArea\TCountry;


class Country extends Thing{
	use TThing;
	use TPlace;
	use TAdministrativeArea;
	use TCountry;
}
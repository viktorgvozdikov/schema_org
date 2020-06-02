<?php

namespace ModuleBZ\SchemaOrg\Thing\Place\Residence;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPlace;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TResidence;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\Residence\TApartmentComplex;


class ApartmentComplex extends Thing{
	use TThing;
	use TPlace;
	use TResidence;
	use TApartmentComplex;
}
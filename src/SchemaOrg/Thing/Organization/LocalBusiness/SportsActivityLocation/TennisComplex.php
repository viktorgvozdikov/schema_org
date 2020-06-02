<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TSportsActivityLocation;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\SportsActivityLocation\TTennisComplex;


class TennisComplex extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TSportsActivityLocation;
	use TTennisComplex;
}
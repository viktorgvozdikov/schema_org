<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\LodgingBusiness;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TLodgingBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\LodgingBusiness\TCampground;


class Campground extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TLodgingBusiness;
	use TCampground;
}
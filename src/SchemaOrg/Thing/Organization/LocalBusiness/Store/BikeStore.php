<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\Store;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TStore;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\Store\TBikeStore;


class BikeStore extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TStore;
	use TBikeStore;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\HealthAndBeautyBusiness;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\THealthAndBeautyBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\HealthAndBeautyBusiness\TNailSalon;


class NailSalon extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use THealthAndBeautyBusiness;
	use TNailSalon;
}
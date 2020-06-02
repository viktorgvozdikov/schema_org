<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\EmergencyService;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TEmergencyService;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\EmergencyService\TFireStation;


class FireStation extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TEmergencyService;
	use TFireStation;
}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\EmergencyService;

use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TEmergencyService;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TMedicalOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Place\TCivicStructure;

trait THospital{
	use TEmergencyService;
	use TMedicalOrganization;
	use TCivicStructure;

}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TEmergencyService;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\TMedicalOrganization;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait THospital{
	use TEmergencyService;
	use TMedicalOrganization;
	use TCivicStructure;

}
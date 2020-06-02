<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\MedicalBusiness\MedicalClinic;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TMedicalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\MedicalBusiness\TMedicalClinic;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\MedicalBusiness\MedicalClinic\TCovidTestingFacility;


class CovidTestingFacility extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TMedicalBusiness;
	use TMedicalClinic;
	use TCovidTestingFacility;
}
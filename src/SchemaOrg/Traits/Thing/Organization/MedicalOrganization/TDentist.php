<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TMedicalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TMedicalOrganization;

trait TDentist{
	use TLocalBusiness;
	use TMedicalBusiness;
	use TMedicalOrganization;

}
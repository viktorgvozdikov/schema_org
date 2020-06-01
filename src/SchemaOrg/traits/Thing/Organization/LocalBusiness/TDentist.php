<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TMedicalBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\TMedicalOrganization;

trait TDentist{
	use TLocalBusiness;
	use TMedicalBusiness;
	use TMedicalOrganization;

}
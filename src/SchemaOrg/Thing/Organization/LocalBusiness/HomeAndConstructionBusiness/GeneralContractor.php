<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\HomeAndConstructionBusiness;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\THomeAndConstructionBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\HomeAndConstructionBusiness\TGeneralContractor;


class GeneralContractor extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use THomeAndConstructionBusiness;
	use TGeneralContractor;
}
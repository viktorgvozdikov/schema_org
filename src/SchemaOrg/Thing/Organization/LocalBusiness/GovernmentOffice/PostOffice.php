<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\GovernmentOffice;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TGovernmentOffice;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\GovernmentOffice\TPostOffice;


class PostOffice extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TGovernmentOffice;
	use TPostOffice;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TEntertainmentBusiness;


class EntertainmentBusiness extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TEntertainmentBusiness;
}
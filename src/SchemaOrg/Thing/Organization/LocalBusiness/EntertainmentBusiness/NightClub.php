<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TEntertainmentBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\EntertainmentBusiness\TNightClub;


class NightClub extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TEntertainmentBusiness;
	use TNightClub;
}
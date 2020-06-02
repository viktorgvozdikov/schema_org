<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\SportsOrganization;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TSportsOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\SportsOrganization\TSportsTeam;


class SportsTeam extends Thing{
	use TThing;
	use TOrganization;
	use TSportsOrganization;
	use TSportsTeam;
}
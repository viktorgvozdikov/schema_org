<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TSportsOrganization;


class SportsOrganization extends Thing{
	use TThing;
	use TOrganization;
	use TSportsOrganization;
}
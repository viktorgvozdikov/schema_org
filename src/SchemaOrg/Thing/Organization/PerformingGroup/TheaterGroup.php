<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\PerformingGroup;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TPerformingGroup;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\PerformingGroup\TTheaterGroup;


class TheaterGroup extends Thing{
	use TThing;
	use TOrganization;
	use TPerformingGroup;
	use TTheaterGroup;
}
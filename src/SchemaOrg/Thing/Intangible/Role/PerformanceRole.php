<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Role;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TRole;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role\TPerformanceRole;


class PerformanceRole extends Thing{
	use TThing;
	use TIntangible;
	use TRole;
	use TPerformanceRole;
}
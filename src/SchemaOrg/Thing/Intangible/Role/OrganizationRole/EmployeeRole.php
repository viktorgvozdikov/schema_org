<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Role\OrganizationRole;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TRole;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role\TOrganizationRole;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role\OrganizationRole\TEmployeeRole;


class EmployeeRole extends Thing{
	use TThing;
	use TIntangible;
	use TRole;
	use TOrganizationRole;
	use TEmployeeRole;
}
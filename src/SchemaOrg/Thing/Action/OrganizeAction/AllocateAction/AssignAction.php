<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TOrganizeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\TAllocateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\AllocateAction\TAssignAction;


class AssignAction extends Thing{
	use TThing;
	use TAction;
	use TOrganizeAction;
	use TAllocateAction;
	use TAssignAction;
}
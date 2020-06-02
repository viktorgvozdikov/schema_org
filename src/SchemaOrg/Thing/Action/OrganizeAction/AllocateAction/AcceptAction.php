<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TOrganizeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\TAllocateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\AllocateAction\TAcceptAction;


class AcceptAction extends Thing{
	use TThing;
	use TAction;
	use TOrganizeAction;
	use TAllocateAction;
	use TAcceptAction;
}
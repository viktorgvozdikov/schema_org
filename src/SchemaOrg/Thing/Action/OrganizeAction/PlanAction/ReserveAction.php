<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\OrganizeAction\PlanAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TOrganizeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\TPlanAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\PlanAction\TReserveAction;


class ReserveAction extends Thing{
	use TThing;
	use TAction;
	use TOrganizeAction;
	use TPlanAction;
	use TReserveAction;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\ControlAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TControlAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\ControlAction\TSuspendAction;


class SuspendAction extends Thing{
	use TThing;
	use TAction;
	use TControlAction;
	use TSuspendAction;
}
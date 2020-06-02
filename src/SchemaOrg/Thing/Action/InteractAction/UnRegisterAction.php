<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\InteractAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TInteractAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\TUnRegisterAction;


class UnRegisterAction extends Thing{
	use TThing;
	use TAction;
	use TInteractAction;
	use TUnRegisterAction;
}
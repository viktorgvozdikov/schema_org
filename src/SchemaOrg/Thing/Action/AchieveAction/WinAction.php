<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AchieveAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAchieveAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AchieveAction\TWinAction;


class WinAction extends Thing{
	use TThing;
	use TAction;
	use TAchieveAction;
	use TWinAction;
}
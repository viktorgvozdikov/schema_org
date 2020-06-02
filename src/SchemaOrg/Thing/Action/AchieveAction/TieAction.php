<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AchieveAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAchieveAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AchieveAction\TTieAction;


class TieAction extends Thing{
	use TThing;
	use TAction;
	use TAchieveAction;
	use TTieAction;
}
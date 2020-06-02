<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\MoveAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TMoveAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\MoveAction\TArriveAction;


class ArriveAction extends Thing{
	use TThing;
	use TAction;
	use TMoveAction;
	use TArriveAction;
}
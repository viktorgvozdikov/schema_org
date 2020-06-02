<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\ConsumeAction\UseAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TConsumeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\ConsumeAction\TUseAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\ConsumeAction\UseAction\TWearAction;


class WearAction extends Thing{
	use TThing;
	use TAction;
	use TConsumeAction;
	use TUseAction;
	use TWearAction;
}
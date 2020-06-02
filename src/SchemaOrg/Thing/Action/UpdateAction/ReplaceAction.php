<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\UpdateAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TUpdateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\UpdateAction\TReplaceAction;


class ReplaceAction extends Thing{
	use TThing;
	use TAction;
	use TUpdateAction;
	use TReplaceAction;
}
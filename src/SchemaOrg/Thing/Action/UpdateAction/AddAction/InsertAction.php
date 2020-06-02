<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\UpdateAction\AddAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TUpdateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\UpdateAction\TAddAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\UpdateAction\AddAction\TInsertAction;


class InsertAction extends Thing{
	use TThing;
	use TAction;
	use TUpdateAction;
	use TAddAction;
	use TInsertAction;
}
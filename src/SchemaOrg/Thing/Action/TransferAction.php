<?php

namespace ModuleBZ\SchemaOrg\Thing\Action;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TTransferAction;


class TransferAction extends Thing{
	use TThing;
	use TAction;
	use TTransferAction;
}
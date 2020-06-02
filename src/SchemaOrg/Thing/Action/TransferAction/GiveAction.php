<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TTransferAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction\TGiveAction;


class GiveAction extends Thing{
	use TThing;
	use TAction;
	use TTransferAction;
	use TGiveAction;
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TTransferAction;

trait TReceiveAction{
	use TTransferAction;

	protected $type = 'ReceiveAction';
}
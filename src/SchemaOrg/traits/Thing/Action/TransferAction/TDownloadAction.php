<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TTransferAction;

trait TDownloadAction{
	use TTransferAction;

	protected $type = 'DownloadAction';
}
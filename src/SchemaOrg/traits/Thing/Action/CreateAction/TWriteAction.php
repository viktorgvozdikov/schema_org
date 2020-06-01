<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\CreateAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TCreateAction;

trait TWriteAction{
	use TCreateAction;

	protected $type = 'WriteAction';
}
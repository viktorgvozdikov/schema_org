<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\UpdateAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TUpdateAction;

trait TReplaceAction{
	use TUpdateAction;

	protected $type = 'ReplaceAction';
}
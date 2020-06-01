<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\UpdateAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TUpdateAction;

trait TDeleteAction{
	use TUpdateAction;

	protected $type = 'DeleteAction';
}
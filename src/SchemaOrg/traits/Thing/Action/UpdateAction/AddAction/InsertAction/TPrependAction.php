<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\UpdateAction\AddAction\InsertAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\UpdateAction\AddAction\TInsertAction;

trait TPrependAction{
	use TInsertAction;

	protected $type = 'PrependAction';
}
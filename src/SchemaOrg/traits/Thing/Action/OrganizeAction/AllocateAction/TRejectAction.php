<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\OrganizeAction\AllocateAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\OrganizeAction\TAllocateAction;

trait TRejectAction{
	use TAllocateAction;

	protected $type = 'RejectAction';
}
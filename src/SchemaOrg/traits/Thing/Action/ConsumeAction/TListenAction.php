<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\ConsumeAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TConsumeAction;

trait TListenAction{
	use TConsumeAction;

	protected $type = 'ListenAction';
}
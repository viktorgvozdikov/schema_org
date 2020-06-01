<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\ConsumeAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TConsumeAction;

trait TReadAction{
	use TConsumeAction;

	protected $type = 'ReadAction';
}
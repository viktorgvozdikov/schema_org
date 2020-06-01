<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\AssessAction\ReactAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\AssessAction\TReactAction;

trait TDislikeAction{
	use TReactAction;

	protected $type = 'DislikeAction';
}
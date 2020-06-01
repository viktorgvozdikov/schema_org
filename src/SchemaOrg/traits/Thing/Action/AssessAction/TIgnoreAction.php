<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Action\AssessAction;

use ModuleBZ\SchemaOrg\traits\Thing\Action\TAssessAction;

trait TIgnoreAction{
	use TAssessAction;

	protected $type = 'IgnoreAction';
}
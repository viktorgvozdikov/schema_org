<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AssessAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAssessAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\TIgnoreAction;


class IgnoreAction extends Thing{
	use TThing;
	use TAction;
	use TAssessAction;
	use TIgnoreAction;
}
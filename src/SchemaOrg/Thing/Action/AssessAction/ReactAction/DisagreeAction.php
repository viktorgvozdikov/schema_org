<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAssessAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\TReactAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\ReactAction\TDisagreeAction;


class DisagreeAction extends Thing{
	use TThing;
	use TAction;
	use TAssessAction;
	use TReactAction;
	use TDisagreeAction;
}
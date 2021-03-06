<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAssessAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\TReactAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\ReactAction\TEndorseAction;


class EndorseAction extends Thing{
	use TThing;
	use TAction;
	use TAssessAction;
	use TReactAction;
	use TEndorseAction;
}
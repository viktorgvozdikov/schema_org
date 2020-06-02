<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AssessAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAssessAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\TChooseAction;


class ChooseAction extends Thing{
	use TThing;
	use TAction;
	use TAssessAction;
	use TChooseAction;
}
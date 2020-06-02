<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TAssessAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\TChooseAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\ChooseAction\TVoteAction;


class VoteAction extends Thing{
	use TThing;
	use TAction;
	use TAssessAction;
	use TChooseAction;
	use TVoteAction;
}
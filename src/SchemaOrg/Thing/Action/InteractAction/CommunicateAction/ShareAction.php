<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TInteractAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\TCommunicateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\CommunicateAction\TShareAction;


class ShareAction extends Thing{
	use TThing;
	use TAction;
	use TInteractAction;
	use TCommunicateAction;
	use TShareAction;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\FindAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TFindAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\FindAction\TTrackAction;


class TrackAction extends Thing{
	use TThing;
	use TAction;
	use TFindAction;
	use TTrackAction;
}
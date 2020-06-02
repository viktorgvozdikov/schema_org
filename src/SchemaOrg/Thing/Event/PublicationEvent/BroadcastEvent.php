<?php

namespace ModuleBZ\SchemaOrg\Thing\Event\PublicationEvent;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TEvent;
use ModuleBZ\SchemaOrg\Traits\Thing\Event\TPublicationEvent;
use ModuleBZ\SchemaOrg\Traits\Thing\Event\PublicationEvent\TBroadcastEvent;


class BroadcastEvent extends Thing{
	use TThing;
	use TEvent;
	use TPublicationEvent;
	use TBroadcastEvent;
}
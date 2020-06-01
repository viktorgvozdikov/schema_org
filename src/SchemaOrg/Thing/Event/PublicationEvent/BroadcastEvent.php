<?php

namespace ModuleBZ\SchemaOrg\Thing\Event\PublicationEvent;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\Thing\Event\PublicationEvent\TBroadcastEvent;

class BroadcastEvent extends Thing{
	use TBroadcastEvent;
}
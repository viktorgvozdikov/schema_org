<?php

namespace ModuleBZ\SchemaOrg\Thing\Event\PublicationEvent;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\traits\Thing\Event\PublicationEvent\TBroadcastEvent;

class BroadcastEvent extends Thing{
	use TBroadcastEvent;
}
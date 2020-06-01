<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Event;

use ModuleBZ\SchemaOrg\traits\Thing\TEvent;

trait TSocialEvent{
	use TEvent;

	protected $type = 'SocialEvent';
}
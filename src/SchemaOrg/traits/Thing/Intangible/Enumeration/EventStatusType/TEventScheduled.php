<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\EventStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TEventStatusType;

trait TEventScheduled{
	use TEventStatusType;

	protected $type = 'EventScheduled';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\EventStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TEventStatusType;

trait TEventRescheduled{
	use TEventStatusType;

	protected $type = 'EventRescheduled';
}
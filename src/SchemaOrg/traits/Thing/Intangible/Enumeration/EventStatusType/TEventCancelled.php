<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\EventStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TEventStatusType;

trait TEventCancelled{
	use TEventStatusType;

	protected $type = 'EventCancelled';
}
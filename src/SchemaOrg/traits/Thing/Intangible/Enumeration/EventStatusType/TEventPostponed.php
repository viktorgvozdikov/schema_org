<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\EventStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TEventStatusType;

trait TEventPostponed{
	use TEventStatusType;

	protected $type = 'EventPostponed';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemAvailability;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemAvailability;

trait TOnlineOnly{
	use TItemAvailability;

	protected $type = 'OnlineOnly';
}
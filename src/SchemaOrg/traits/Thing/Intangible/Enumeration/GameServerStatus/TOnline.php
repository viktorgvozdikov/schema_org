<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\GameServerStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TGameServerStatus;

trait TOnline{
	use TGameServerStatus;

	protected $type = 'Online';
}
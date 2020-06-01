<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\GameServerStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TGameServerStatus;

trait TOfflineTemporarily{
	use TGameServerStatus;

	protected $type = 'OfflineTemporarily';
}
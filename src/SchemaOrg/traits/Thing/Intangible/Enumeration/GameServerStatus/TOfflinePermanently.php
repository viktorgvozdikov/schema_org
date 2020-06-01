<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\GameServerStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TGameServerStatus;

trait TOfflinePermanently{
	use TGameServerStatus;

	protected $type = 'OfflinePermanently';
}
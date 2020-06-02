<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\GameServerStatus;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TGameServerStatus;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\GameServerStatus\TOfflineTemporarily;


class OfflineTemporarily extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TGameServerStatus;
	use TOfflineTemporarily;
}
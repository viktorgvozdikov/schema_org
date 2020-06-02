<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ActionStatusType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TActionStatusType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ActionStatusType\TPotentialActionStatus;


class PotentialActionStatus extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TActionStatusType;
	use TPotentialActionStatus;
}
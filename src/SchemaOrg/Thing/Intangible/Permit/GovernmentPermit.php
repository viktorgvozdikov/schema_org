<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Permit;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TPermit;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Permit\TGovernmentPermit;


class GovernmentPermit extends Thing{
	use TThing;
	use TIntangible;
	use TPermit;
	use TGovernmentPermit;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\GamePlayMode;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TGamePlayMode;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\GamePlayMode\TCoOp;


class CoOp extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TGamePlayMode;
	use TCoOp;
}
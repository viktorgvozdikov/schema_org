<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Grant;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TGrant;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Grant\TMonetaryGrant;


class MonetaryGrant extends Thing{
	use TThing;
	use TIntangible;
	use TGrant;
	use TMonetaryGrant;
}
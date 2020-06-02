<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Audience;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\TBusinessAudience;


class BusinessAudience extends Thing{
	use TThing;
	use TIntangible;
	use TAudience;
	use TBusinessAudience;
}
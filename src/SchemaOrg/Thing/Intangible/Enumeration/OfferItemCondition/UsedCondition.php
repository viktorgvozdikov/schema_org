<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TOfferItemCondition;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\OfferItemCondition\TUsedCondition;


class UsedCondition extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TOfferItemCondition;
	use TUsedCondition;
}
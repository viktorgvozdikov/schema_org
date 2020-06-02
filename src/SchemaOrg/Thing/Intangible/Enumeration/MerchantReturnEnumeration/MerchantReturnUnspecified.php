<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MerchantReturnEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMerchantReturnEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MerchantReturnEnumeration\TMerchantReturnUnspecified;


class MerchantReturnUnspecified extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMerchantReturnEnumeration;
	use TMerchantReturnUnspecified;
}
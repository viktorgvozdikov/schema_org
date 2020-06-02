<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TDeliveryMethod;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\DeliveryMethod\TOnSitePickup;


class OnSitePickup extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TDeliveryMethod;
	use TOnSitePickup;
}
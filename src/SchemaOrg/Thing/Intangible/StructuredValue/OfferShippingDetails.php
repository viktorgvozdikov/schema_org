<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TOfferShippingDetails;


class OfferShippingDetails extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TOfferShippingDetails;
}
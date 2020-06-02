<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Offer;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TOffer;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Offer\TAggregateOffer;


class AggregateOffer extends Thing{
	use TThing;
	use TIntangible;
	use TOffer;
	use TAggregateOffer;
}
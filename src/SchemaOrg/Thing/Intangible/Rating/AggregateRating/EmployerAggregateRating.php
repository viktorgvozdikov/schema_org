<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Rating\AggregateRating;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TRating;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Rating\TAggregateRating;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Rating\AggregateRating\TEmployerAggregateRating;


class EmployerAggregateRating extends Thing{
	use TThing;
	use TIntangible;
	use TRating;
	use TAggregateRating;
	use TEmployerAggregateRating;
}
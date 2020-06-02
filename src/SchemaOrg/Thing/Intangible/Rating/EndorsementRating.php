<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Rating;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TRating;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Rating\TEndorsementRating;


class EndorsementRating extends Thing{
	use TThing;
	use TIntangible;
	use TRating;
	use TEndorsementRating;
}
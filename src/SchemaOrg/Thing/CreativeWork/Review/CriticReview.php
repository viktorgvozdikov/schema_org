<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Review;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TReview;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review\TCriticReview;


class CriticReview extends Thing{
	use TThing;
	use TCreativeWork;
	use TReview;
	use TCriticReview;
}
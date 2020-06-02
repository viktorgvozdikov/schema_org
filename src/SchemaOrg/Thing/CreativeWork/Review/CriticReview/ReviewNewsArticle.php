<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Review\CriticReview;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TReview;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review\TCriticReview;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review\CriticReview\TReviewNewsArticle;


class ReviewNewsArticle extends Thing{
	use TThing;
	use TCreativeWork;
	use TReview;
	use TCriticReview;
	use TReviewNewsArticle;
}
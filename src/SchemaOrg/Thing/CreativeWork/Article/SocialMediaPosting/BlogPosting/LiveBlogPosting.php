<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TSocialMediaPosting;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\SocialMediaPosting\TBlogPosting;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting\TLiveBlogPosting;


class LiveBlogPosting extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TSocialMediaPosting;
	use TBlogPosting;
	use TLiveBlogPosting;
}
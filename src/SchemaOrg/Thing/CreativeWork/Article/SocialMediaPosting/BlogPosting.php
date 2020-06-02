<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TSocialMediaPosting;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\SocialMediaPosting\TBlogPosting;


class BlogPosting extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TSocialMediaPosting;
	use TBlogPosting;
}
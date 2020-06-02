<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TTechArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TechArticle\TAPIReference;


class APIReference extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TTechArticle;
	use TAPIReference;
}
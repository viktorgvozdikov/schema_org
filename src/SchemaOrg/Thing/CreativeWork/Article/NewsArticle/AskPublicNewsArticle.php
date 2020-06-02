<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article\NewsArticle;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TNewsArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\NewsArticle\TAskPublicNewsArticle;


class AskPublicNewsArticle extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TNewsArticle;
	use TAskPublicNewsArticle;
}
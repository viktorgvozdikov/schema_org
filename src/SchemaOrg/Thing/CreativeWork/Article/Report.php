<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TReport;


class Report extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TReport;
}
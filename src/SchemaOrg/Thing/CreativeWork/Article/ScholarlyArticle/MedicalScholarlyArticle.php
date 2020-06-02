<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TScholarlyArticle;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\ScholarlyArticle\TMedicalScholarlyArticle;


class MedicalScholarlyArticle extends Thing{
	use TThing;
	use TCreativeWork;
	use TArticle;
	use TScholarlyArticle;
	use TMedicalScholarlyArticle;
}
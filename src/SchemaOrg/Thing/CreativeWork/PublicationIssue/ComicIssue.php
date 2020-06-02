<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\PublicationIssue;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TPublicationIssue;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\PublicationIssue\TComicIssue;


class ComicIssue extends Thing{
	use TThing;
	use TCreativeWork;
	use TPublicationIssue;
	use TComicIssue;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\WebContent;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TWebContent;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebContent\THealthTopicContent;


class HealthTopicContent extends Thing{
	use TThing;
	use TCreativeWork;
	use TWebContent;
	use THealthTopicContent;
}
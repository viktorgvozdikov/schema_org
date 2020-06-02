<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\WebPageElement;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TWebPageElement;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebPageElement\TWPAdBlock;


class WPAdBlock extends Thing{
	use TThing;
	use TCreativeWork;
	use TWebPageElement;
	use TWPAdBlock;
}
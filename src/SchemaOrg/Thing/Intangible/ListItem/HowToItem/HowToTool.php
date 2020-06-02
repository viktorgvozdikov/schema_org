<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\ListItem\HowToItem;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TListItem;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ListItem\THowToItem;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ListItem\HowToItem\THowToTool;


class HowToTool extends Thing{
	use TThing;
	use TIntangible;
	use TListItem;
	use THowToItem;
	use THowToTool;
}
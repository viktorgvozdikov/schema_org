<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\ListItem;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TListItem;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ListItem\THowToStep;


class HowToStep extends Thing{
	use TThing;
	use TIntangible;
	use TListItem;
	use THowToStep;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\ItemList;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TItemList;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ItemList\THowToSection;


class HowToSection extends Thing{
	use TThing;
	use TIntangible;
	use TItemList;
	use THowToSection;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\DefinedTermSet;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TDefinedTermSet;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\DefinedTermSet\TCategoryCodeSet;


class CategoryCodeSet extends Thing{
	use TThing;
	use TCreativeWork;
	use TDefinedTermSet;
	use TCategoryCodeSet;
}
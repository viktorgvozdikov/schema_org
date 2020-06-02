<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\HowTo;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\THowTo;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\HowTo\TRecipe;


class Recipe extends Thing{
	use TThing;
	use TCreativeWork;
	use THowTo;
	use TRecipe;
}
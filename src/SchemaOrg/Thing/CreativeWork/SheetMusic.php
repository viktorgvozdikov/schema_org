<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TSheetMusic;


class SheetMusic extends Thing{
	use TThing;
	use TCreativeWork;
	use TSheetMusic;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TCreativeWorkSeason;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeason\TTVSeason;


class TVSeason extends Thing{
	use TThing;
	use TCreativeWork;
	use TCreativeWorkSeason;
	use TTVSeason;
}
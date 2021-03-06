<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TSoftwareApplication;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\SoftwareApplication\TVideoGame;


class VideoGame extends Thing{
	use TThing;
	use TCreativeWork;
	use TSoftwareApplication;
	use TVideoGame;
}
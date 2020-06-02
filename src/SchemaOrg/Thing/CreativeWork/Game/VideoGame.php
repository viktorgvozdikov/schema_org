<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Game;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TGame;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Game\TVideoGame;


class VideoGame extends Thing{
	use TThing;
	use TCreativeWork;
	use TGame;
	use TVideoGame;
}
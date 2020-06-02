<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\MediaObject;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMediaObject;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject\TVideoObject;


class VideoObject extends Thing{
	use TThing;
	use TCreativeWork;
	use TMediaObject;
	use TVideoObject;
}
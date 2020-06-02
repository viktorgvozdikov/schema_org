<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMediaObject;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject\TAudioObject;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject\AudioObject\TAudiobook;


class Audiobook extends Thing{
	use TThing;
	use TCreativeWork;
	use TMediaObject;
	use TAudioObject;
	use TAudiobook;
}
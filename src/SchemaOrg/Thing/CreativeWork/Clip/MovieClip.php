<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Clip;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TClip;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Clip\TMovieClip;


class MovieClip extends Thing{
	use TThing;
	use TCreativeWork;
	use TClip;
	use TMovieClip;
}
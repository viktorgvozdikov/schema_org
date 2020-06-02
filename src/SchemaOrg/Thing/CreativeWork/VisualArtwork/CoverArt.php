<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\VisualArtwork;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TVisualArtwork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\VisualArtwork\TCoverArt;


class CoverArt extends Thing{
	use TThing;
	use TCreativeWork;
	use TVisualArtwork;
	use TCoverArt;
}
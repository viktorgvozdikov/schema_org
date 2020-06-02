<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\ComicStory;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TComicStory;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\ComicStory\TComicCoverArt;


class ComicCoverArt extends Thing{
	use TThing;
	use TCreativeWork;
	use TComicStory;
	use TComicCoverArt;
}
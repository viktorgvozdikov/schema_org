<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumReleaseType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMusicAlbumReleaseType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MusicAlbumReleaseType\TAlbumRelease;


class AlbumRelease extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMusicAlbumReleaseType;
	use TAlbumRelease;
}
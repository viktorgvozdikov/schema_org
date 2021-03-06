<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumProductionType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMusicAlbumProductionType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MusicAlbumProductionType\TDJMixAlbum;


class DJMixAlbum extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMusicAlbumProductionType;
	use TDJMixAlbum;
}
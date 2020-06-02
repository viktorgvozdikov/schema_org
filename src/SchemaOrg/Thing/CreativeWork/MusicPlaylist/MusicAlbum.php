<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMusicPlaylist;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MusicPlaylist\TMusicAlbum;


class MusicAlbum extends Thing{
	use TThing;
	use TCreativeWork;
	use TMusicPlaylist;
	use TMusicAlbum;
}
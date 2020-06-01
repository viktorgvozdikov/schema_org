<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\MusicPlaylist;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TMusicPlaylist;

trait TMusicAlbum{
	use TMusicPlaylist;

	protected $type = 'MusicAlbum';
}
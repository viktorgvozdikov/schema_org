<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\MusicAlbumReleaseType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TMusicAlbumReleaseType;

trait TSingleRelease{
	use TMusicAlbumReleaseType;

	protected $type = 'SingleRelease';
}
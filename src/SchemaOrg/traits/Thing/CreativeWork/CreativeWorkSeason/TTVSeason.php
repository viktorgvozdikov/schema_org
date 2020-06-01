<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\CreativeWorkSeason;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TCreativeWorkSeason;
use ModuleBZ\SchemaOrg\traits\Thing\TCreativeWork;

trait TTVSeason{
	use TCreativeWorkSeason;
	use TCreativeWork;

	protected $type = 'TVSeason';
}
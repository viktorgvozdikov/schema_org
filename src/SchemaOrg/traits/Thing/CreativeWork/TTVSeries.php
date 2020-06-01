<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TCreativeWorkSeries;
use ModuleBZ\SchemaOrg\traits\Thing\TCreativeWork;

trait TTVSeries{
	use TCreativeWorkSeries;
	use TCreativeWork;

	protected $type = 'TVSeries';
}
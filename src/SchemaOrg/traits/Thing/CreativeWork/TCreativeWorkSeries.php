<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TSeries;

trait TCreativeWorkSeries{
	use TCreativeWork;
	use TSeries;

	protected $type = 'CreativeWorkSeries';
}
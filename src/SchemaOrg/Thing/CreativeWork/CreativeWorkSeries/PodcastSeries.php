<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TCreativeWorkSeries;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries\TPodcastSeries;


class PodcastSeries extends Thing{
	use TThing;
	use TCreativeWork;
	use TCreativeWorkSeries;
	use TPodcastSeries;
}
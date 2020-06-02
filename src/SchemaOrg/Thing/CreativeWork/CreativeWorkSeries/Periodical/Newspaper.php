<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries\Periodical;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TCreativeWorkSeries;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries\TPeriodical;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries\Periodical\TNewspaper;


class Newspaper extends Thing{
	use TThing;
	use TCreativeWork;
	use TCreativeWorkSeries;
	use TPeriodical;
	use TNewspaper;
}
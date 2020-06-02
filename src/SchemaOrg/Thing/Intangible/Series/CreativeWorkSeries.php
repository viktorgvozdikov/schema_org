<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Series;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TSeries;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Series\TCreativeWorkSeries;


class CreativeWorkSeries extends Thing{
	use TThing;
	use TIntangible;
	use TSeries;
	use TCreativeWorkSeries;
}
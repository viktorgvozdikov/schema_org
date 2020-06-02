<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Service\BroadcastService;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TService;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\TBroadcastService;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\BroadcastService\TRadioBroadcastService;


class RadioBroadcastService extends Thing{
	use TThing;
	use TIntangible;
	use TService;
	use TBroadcastService;
	use TRadioBroadcastService;
}
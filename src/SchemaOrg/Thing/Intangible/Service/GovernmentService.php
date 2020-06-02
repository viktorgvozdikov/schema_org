<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Service;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TService;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\TGovernmentService;


class GovernmentService extends Thing{
	use TThing;
	use TIntangible;
	use TService;
	use TGovernmentService;
}
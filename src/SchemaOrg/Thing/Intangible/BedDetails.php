<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TBedDetails;


class BedDetails extends Thing{
	use TThing;
	use TIntangible;
	use TBedDetails;
}
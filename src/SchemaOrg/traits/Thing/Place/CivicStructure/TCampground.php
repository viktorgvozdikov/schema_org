<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TLodgingBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait TCampground{
	use TLodgingBusiness;
	use TCivicStructure;

	protected $type = 'Campground';
}
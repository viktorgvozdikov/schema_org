<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TSportsActivityLocation;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait TStadiumOrArena{
	use TSportsActivityLocation;
	use TCivicStructure;

	protected $type = 'StadiumOrArena';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TEmergencyService;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait TPoliceStation{
	use TEmergencyService;
	use TCivicStructure;

	protected $type = 'PoliceStation';
}
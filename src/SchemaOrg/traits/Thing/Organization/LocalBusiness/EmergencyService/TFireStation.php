<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\EmergencyService;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TEmergencyService;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait TFireStation{
	use TEmergencyService;
	use TCivicStructure;

	protected $type = 'FireStation';
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\MedicalBusiness;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TMedicalBusiness;

trait TEmergency{
	use TMedicalBusiness;

	protected $type = 'Emergency';
}
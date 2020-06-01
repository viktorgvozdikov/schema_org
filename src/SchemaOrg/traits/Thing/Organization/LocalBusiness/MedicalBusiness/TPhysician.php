<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\MedicalBusiness;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TMedicalBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\TMedicalOrganization;

trait TPhysician{
	use TMedicalBusiness;
	use TMedicalOrganization;

	protected $type = 'Physician';
}
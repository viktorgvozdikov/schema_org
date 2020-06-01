<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TMedicalBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\TMedicalOrganization;

trait TPharmacy{
	use TMedicalBusiness;
	use TMedicalOrganization;

	protected $type = 'Pharmacy';
}
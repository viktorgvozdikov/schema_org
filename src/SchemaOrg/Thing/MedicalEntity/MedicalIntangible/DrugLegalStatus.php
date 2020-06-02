<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible\TDrugLegalStatus;


class DrugLegalStatus extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalIntangible;
	use TDrugLegalStatus;
}
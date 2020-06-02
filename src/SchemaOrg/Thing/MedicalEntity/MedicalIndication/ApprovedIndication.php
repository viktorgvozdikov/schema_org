<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalIndication;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalIndication;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIndication\TApprovedIndication;


class ApprovedIndication extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalIndication;
	use TApprovedIndication;
}
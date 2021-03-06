<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalStudy;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalStudy\TMedicalTrial;


class MedicalTrial extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalStudy;
	use TMedicalTrial;
}
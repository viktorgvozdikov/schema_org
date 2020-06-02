<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalProcedure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TTherapeuticProcedure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\TMedicalTherapy;


class MedicalTherapy extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalProcedure;
	use TTherapeuticProcedure;
	use TMedicalTherapy;
}
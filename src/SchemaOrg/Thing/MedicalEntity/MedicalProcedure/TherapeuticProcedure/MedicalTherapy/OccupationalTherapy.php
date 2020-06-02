<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalProcedure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TTherapeuticProcedure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\TMedicalTherapy;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\TOccupationalTherapy;


class OccupationalTherapy extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalProcedure;
	use TTherapeuticProcedure;
	use TMedicalTherapy;
	use TOccupationalTherapy;
}
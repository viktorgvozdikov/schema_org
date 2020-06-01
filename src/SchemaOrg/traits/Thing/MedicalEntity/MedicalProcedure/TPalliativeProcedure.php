<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalProcedure;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TMedicalProcedure;
use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\TMedicalTherapy;

trait TPalliativeProcedure{
	use TMedicalProcedure;
	use TMedicalTherapy;

	protected $type = 'PalliativeProcedure';
}
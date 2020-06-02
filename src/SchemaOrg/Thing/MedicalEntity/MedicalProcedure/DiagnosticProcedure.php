<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalProcedure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalProcedure\TDiagnosticProcedure;


class DiagnosticProcedure extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalProcedure;
	use TDiagnosticProcedure;
}
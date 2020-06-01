<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalProcedure;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TMedicalEnumeration;
use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TMedicalProcedure;

trait TPhysicalExam{
	use TMedicalEnumeration;
	use TMedicalProcedure;

	protected $type = 'PhysicalExam';
}
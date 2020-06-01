<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\Specialty;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TMedicalEnumeration;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TSpecialty;

trait TMedicalSpecialty{
	use TMedicalEnumeration;
	use TSpecialty;

	protected $type = 'MedicalSpecialty';
}
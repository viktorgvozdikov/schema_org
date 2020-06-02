<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\Specialty;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TSpecialty;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\Specialty\TMedicalSpecialty;


class MedicalSpecialty extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TSpecialty;
	use TMedicalSpecialty;
}
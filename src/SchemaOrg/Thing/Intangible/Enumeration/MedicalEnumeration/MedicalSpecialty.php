<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMedicalEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration\TMedicalSpecialty;


class MedicalSpecialty extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMedicalEnumeration;
	use TMedicalSpecialty;
}
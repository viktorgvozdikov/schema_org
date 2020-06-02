<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMedicalEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration\TMedicalTrialDesign;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign\TRandomizedTrial;


class RandomizedTrial extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TMedicalEnumeration;
	use TMedicalTrialDesign;
	use TRandomizedTrial;
}
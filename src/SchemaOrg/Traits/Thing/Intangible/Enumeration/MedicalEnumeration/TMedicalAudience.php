<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\MedicalEnumeration;

use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\TPeopleAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TMedicalEnumeration;

trait TMedicalAudience{
	use TAudience;
	use TPeopleAudience;
	use TMedicalEnumeration;

}
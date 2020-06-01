<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\MedicalEnumeration;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TAudience;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Audience\TPeopleAudience;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TMedicalEnumeration;

trait TMedicalAudience{
	use TAudience;
	use TPeopleAudience;
	use TMedicalEnumeration;

}
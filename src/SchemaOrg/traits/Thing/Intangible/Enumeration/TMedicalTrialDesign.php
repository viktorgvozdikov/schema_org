<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TMedicalEnumeration;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TEnumeration;

trait TMedicalTrialDesign{
	use TMedicalEnumeration;
	use TEnumeration;

	protected $type = 'MedicalTrialDesign';
}
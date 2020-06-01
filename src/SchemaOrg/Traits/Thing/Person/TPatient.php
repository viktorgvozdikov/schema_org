<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Person;

use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\TMedicalAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\TPerson;

trait TPatient{
	use TMedicalAudience;
	use TPerson;

}
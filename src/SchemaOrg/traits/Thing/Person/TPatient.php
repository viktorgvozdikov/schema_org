<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Person;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Audience\TMedicalAudience;
use ModuleBZ\SchemaOrg\traits\Thing\TPerson;

trait TPatient{
	use TMedicalAudience;
	use TPerson;

	protected $type = 'Patient';
}
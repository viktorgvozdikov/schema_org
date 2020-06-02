<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Audience\MedicalAudience;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\TMedicalAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\MedicalAudience\TPatient;


class Patient extends Thing{
	use TThing;
	use TIntangible;
	use TAudience;
	use TMedicalAudience;
	use TPatient;
}
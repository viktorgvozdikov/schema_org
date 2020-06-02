<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\TPeopleAudience;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\PeopleAudience\TMedicalAudience;


class MedicalAudience extends Thing{
	use TThing;
	use TIntangible;
	use TAudience;
	use TPeopleAudience;
	use TMedicalAudience;
}
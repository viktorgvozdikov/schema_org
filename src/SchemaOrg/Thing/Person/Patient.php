<?php

namespace ModuleBZ\SchemaOrg\Thing\Person;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPerson;
use ModuleBZ\SchemaOrg\Traits\Thing\Person\TPatient;


class Patient extends Thing{
	use TThing;
	use TPerson;
	use TPatient;
}
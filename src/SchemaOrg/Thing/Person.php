<?php

namespace ModuleBZ\SchemaOrg\Thing;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TPerson;


class Person extends Thing{
	use TThing;
	use TPerson;
}
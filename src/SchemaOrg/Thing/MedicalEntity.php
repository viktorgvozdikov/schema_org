<?php

namespace ModuleBZ\SchemaOrg\Thing;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;


class MedicalEntity extends Thing{
	use TThing;
	use TMedicalEntity;
}
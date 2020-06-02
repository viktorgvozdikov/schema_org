<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalStudy;


class MedicalStudy extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalStudy;
}
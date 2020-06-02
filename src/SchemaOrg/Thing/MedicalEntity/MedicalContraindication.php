<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalContraindication;


class MedicalContraindication extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalContraindication;
}
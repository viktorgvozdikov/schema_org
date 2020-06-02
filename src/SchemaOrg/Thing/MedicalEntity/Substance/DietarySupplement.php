<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\Substance;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TSubstance;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\Substance\TDietarySupplement;


class DietarySupplement extends Thing{
	use TThing;
	use TMedicalEntity;
	use TSubstance;
	use TDietarySupplement;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalCondition;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition\TInfectiousDisease;


class InfectiousDisease extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalCondition;
	use TInfectiousDisease;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TLifestyleModification;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\LifestyleModification\TPhysicalActivity;


class PhysicalActivity extends Thing{
	use TThing;
	use TMedicalEntity;
	use TLifestyleModification;
	use TPhysicalActivity;
}
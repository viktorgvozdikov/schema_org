<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TLifestyleModification;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\LifestyleModification\TPhysicalActivity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\TExercisePlan;


class ExercisePlan extends Thing{
	use TThing;
	use TMedicalEntity;
	use TLifestyleModification;
	use TPhysicalActivity;
	use TExercisePlan;
}
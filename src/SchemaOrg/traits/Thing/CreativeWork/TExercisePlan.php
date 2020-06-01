<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\LifestyleModification\TPhysicalActivity;

trait TExercisePlan{
	use TCreativeWork;
	use TPhysicalActivity;

	protected $type = 'ExercisePlan';
}
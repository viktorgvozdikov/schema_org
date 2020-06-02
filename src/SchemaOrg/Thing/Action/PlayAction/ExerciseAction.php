<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\PlayAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TPlayAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\PlayAction\TExerciseAction;


class ExerciseAction extends Thing{
	use TThing;
	use TAction;
	use TPlayAction;
	use TExerciseAction;
}
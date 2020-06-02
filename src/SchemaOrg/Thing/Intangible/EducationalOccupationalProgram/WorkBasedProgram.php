<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\EducationalOccupationalProgram;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEducationalOccupationalProgram;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\EducationalOccupationalProgram\TWorkBasedProgram;


class WorkBasedProgram extends Thing{
	use TThing;
	use TIntangible;
	use TEducationalOccupationalProgram;
	use TWorkBasedProgram;
}
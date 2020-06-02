<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TDefinedTerm;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\DefinedTerm\TCategoryCode;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\DefinedTerm\CategoryCode\TMedicalCode;


class MedicalCode extends Thing{
	use TThing;
	use TIntangible;
	use TDefinedTerm;
	use TCategoryCode;
	use TMedicalCode;
}
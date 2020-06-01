<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\DefinedTerm\TCategoryCode;
use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TMedicalIntangible;

trait TMedicalCode{
	use TCategoryCode;
	use TMedicalIntangible;

	protected $type = 'MedicalCode';
}
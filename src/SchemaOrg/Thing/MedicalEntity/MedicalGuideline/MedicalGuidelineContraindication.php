<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalGuideline;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalGuideline\TMedicalGuidelineContraindication;


class MedicalGuidelineContraindication extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalGuideline;
	use TMedicalGuidelineContraindication;
}
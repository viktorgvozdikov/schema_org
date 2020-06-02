<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalCondition;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition\TMedicalSignOrSymptom;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\TMedicalSign;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\TVitalSign;


class VitalSign extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalCondition;
	use TMedicalSignOrSymptom;
	use TMedicalSign;
	use TVitalSign;
}
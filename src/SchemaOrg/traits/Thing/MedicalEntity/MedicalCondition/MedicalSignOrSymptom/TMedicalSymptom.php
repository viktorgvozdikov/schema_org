<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\TMedicalSignOrSymptom;

trait TMedicalSymptom{
	use TMedicalSignOrSymptom;

	protected $type = 'MedicalSymptom';
}
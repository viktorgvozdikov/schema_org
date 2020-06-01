<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\TMedicalSignOrSymptom;

trait TMedicalSign{
	use TMedicalSignOrSymptom;

	protected $type = 'MedicalSign';
}
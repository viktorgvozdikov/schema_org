<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\TMedicalSign;

trait TVitalSign{
	use TMedicalSign;

	protected $type = 'VitalSign';
}
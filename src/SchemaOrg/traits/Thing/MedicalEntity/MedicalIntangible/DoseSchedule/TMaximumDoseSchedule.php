<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalIntangible\TDoseSchedule;

trait TMaximumDoseSchedule{
	use TDoseSchedule;

	protected $type = 'MaximumDoseSchedule';
}
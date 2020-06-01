<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalIntangible\TDoseSchedule;

trait TRecommendedDoseSchedule{
	use TDoseSchedule;

	protected $type = 'RecommendedDoseSchedule';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible\TDoseSchedule;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\TMaximumDoseSchedule;


class MaximumDoseSchedule extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalIntangible;
	use TDoseSchedule;
	use TMaximumDoseSchedule;
}
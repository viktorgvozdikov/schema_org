<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalRiskEstimator;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalRiskEstimator\TMedicalRiskScore;


class MedicalRiskScore extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalRiskEstimator;
	use TMedicalRiskScore;
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalRiskEstimator;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TMedicalRiskEstimator;

trait TMedicalRiskScore{
	use TMedicalRiskEstimator;

	protected $type = 'MedicalRiskScore';
}
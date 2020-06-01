<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\MedicalCondition;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TMedicalCondition;

trait TInfectiousDisease{
	use TMedicalCondition;

	protected $type = 'InfectiousDisease';
}
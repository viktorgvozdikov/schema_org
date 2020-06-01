<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\Substance;

use ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity\TSubstance;

trait TDietarySupplement{
	use TSubstance;

	protected $type = 'DietarySupplement';
}
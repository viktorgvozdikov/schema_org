<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\traits\Thing\TMedicalEntity;

trait TMedicalProcedure{
	use TMedicalEntity;

	protected $type = 'MedicalProcedure';
}
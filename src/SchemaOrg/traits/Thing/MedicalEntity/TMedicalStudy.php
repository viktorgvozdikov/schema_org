<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\traits\Thing\TMedicalEntity;

trait TMedicalStudy{
	use TMedicalEntity;

	protected $type = 'MedicalStudy';
}
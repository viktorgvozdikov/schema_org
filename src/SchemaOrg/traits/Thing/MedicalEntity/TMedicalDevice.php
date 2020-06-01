<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\traits\Thing\TMedicalEntity;

trait TMedicalDevice{
	use TMedicalEntity;

	protected $type = 'MedicalDevice';
}
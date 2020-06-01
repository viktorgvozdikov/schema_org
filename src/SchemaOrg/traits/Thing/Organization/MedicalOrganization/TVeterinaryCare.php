<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\TMedicalOrganization;

trait TVeterinaryCare{
	use TMedicalOrganization;

	protected $type = 'VeterinaryCare';
}
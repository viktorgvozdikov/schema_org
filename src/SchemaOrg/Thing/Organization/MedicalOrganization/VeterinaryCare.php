<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TMedicalOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\MedicalOrganization\TVeterinaryCare;


class VeterinaryCare extends Thing{
	use TThing;
	use TOrganization;
	use TMedicalOrganization;
	use TVeterinaryCare;
}
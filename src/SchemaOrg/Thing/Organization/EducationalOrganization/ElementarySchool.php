<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\EducationalOrganization;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TEducationalOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\EducationalOrganization\TElementarySchool;


class ElementarySchool extends Thing{
	use TThing;
	use TOrganization;
	use TEducationalOrganization;
	use TElementarySchool;
}
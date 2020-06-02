<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\Project;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TProject;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\Project\TFundingAgency;


class FundingAgency extends Thing{
	use TThing;
	use TOrganization;
	use TProject;
	use TFundingAgency;
}
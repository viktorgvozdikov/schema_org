<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\LegalService;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TLegalService;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\LegalService\TNotary;


class Notary extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TLegalService;
	use TNotary;
}
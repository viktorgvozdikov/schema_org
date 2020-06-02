<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\GovernmentBenefitsType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TGovernmentBenefitsType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\GovernmentBenefitsType\THealthCare;


class HealthCare extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TGovernmentBenefitsType;
	use THealthCare;
}
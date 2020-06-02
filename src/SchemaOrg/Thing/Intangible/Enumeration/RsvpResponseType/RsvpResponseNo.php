<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TRsvpResponseType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\RsvpResponseType\TRsvpResponseNo;


class RsvpResponseNo extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TRsvpResponseType;
	use TRsvpResponseNo;
}
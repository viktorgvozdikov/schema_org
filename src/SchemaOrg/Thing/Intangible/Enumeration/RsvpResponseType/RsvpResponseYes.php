<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TRsvpResponseType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\RsvpResponseType\TRsvpResponseYes;


class RsvpResponseYes extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TRsvpResponseType;
	use TRsvpResponseYes;
}
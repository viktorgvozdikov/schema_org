<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Legislation;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TLegislation;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Legislation\TLegislationObject;


class LegislationObject extends Thing{
	use TThing;
	use TCreativeWork;
	use TLegislation;
	use TLegislationObject;
}
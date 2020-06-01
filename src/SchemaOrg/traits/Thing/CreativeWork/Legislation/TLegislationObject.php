<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\Legislation;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TLegislation;
use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TMediaObject;

trait TLegislationObject{
	use TLegislation;
	use TMediaObject;

	protected $type = 'LegislationObject';
}
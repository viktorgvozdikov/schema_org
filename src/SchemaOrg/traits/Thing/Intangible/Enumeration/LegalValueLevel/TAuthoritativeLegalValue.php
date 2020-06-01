<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\LegalValueLevel;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TLegalValueLevel;

trait TAuthoritativeLegalValue{
	use TLegalValueLevel;

	protected $type = 'AuthoritativeLegalValue';
}
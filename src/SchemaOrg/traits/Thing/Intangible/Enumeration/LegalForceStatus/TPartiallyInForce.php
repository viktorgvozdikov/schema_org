<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\LegalForceStatus;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TLegalForceStatus;

trait TPartiallyInForce{
	use TLegalForceStatus;

	protected $type = 'PartiallyInForce';
}
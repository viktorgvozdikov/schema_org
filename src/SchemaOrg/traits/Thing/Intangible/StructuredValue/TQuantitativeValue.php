<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TStructuredValue;

trait TQuantitativeValue{
	use TStructuredValue;

	protected $type = 'QuantitativeValue';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TStructuredValue;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\TQuantitativeValueDistribution;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\TMonetaryAmountDistribution;


class MonetaryAmountDistribution extends Thing{
	use TThing;
	use TIntangible;
	use TStructuredValue;
	use TQuantitativeValueDistribution;
	use TMonetaryAmountDistribution;
}
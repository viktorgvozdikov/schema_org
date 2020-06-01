<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\StructuredValue\TPriceSpecification;

trait TDeliveryChargeSpecification{
	use TPriceSpecification;

	protected $type = 'DeliveryChargeSpecification';
}
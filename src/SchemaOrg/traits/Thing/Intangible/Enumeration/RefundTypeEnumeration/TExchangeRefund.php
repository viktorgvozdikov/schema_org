<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RefundTypeEnumeration;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRefundTypeEnumeration;

trait TExchangeRefund{
	use TRefundTypeEnumeration;

	protected $type = 'ExchangeRefund';
}
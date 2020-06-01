<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\RefundTypeEnumeration;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TRefundTypeEnumeration;

trait TFullRefund{
	use TRefundTypeEnumeration;

	protected $type = 'FullRefund';
}
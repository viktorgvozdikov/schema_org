<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\PaymentStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TPaymentStatusType;

trait TPaymentComplete{
	use TPaymentStatusType;

	protected $type = 'PaymentComplete';
}
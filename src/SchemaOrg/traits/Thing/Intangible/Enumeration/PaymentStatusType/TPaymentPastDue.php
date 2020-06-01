<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\PaymentStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TPaymentStatusType;

trait TPaymentPastDue{
	use TPaymentStatusType;

	protected $type = 'PaymentPastDue';
}
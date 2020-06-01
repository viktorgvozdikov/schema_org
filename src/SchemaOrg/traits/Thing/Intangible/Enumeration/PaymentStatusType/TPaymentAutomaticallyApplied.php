<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\PaymentStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TPaymentStatusType;

trait TPaymentAutomaticallyApplied{
	use TPaymentStatusType;

	protected $type = 'PaymentAutomaticallyApplied';
}
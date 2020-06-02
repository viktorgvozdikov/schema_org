<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\RefundTypeEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TRefundTypeEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\RefundTypeEnumeration\TFullRefund;


class FullRefund extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TRefundTypeEnumeration;
	use TFullRefund;
}
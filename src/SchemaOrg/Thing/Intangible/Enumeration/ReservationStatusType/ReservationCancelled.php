<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\ReservationStatusType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TReservationStatusType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\ReservationStatusType\TReservationCancelled;


class ReservationCancelled extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TReservationStatusType;
	use TReservationCancelled;
}
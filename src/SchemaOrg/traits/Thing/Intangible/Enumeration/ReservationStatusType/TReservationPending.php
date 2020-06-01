<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ReservationStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TReservationStatusType;

trait TReservationPending{
	use TReservationStatusType;

	protected $type = 'ReservationPending';
}
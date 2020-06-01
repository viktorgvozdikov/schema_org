<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ReservationStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TReservationStatusType;

trait TReservationConfirmed{
	use TReservationStatusType;

	protected $type = 'ReservationConfirmed';
}
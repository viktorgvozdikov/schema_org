<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ReservationStatusType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TReservationStatusType;

trait TReservationCancelled{
	use TReservationStatusType;

	protected $type = 'ReservationCancelled';
}
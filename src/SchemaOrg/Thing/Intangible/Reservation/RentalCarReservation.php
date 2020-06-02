<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TReservation;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation\TRentalCarReservation;


class RentalCarReservation extends Thing{
	use TThing;
	use TIntangible;
	use TReservation;
	use TRentalCarReservation;
}
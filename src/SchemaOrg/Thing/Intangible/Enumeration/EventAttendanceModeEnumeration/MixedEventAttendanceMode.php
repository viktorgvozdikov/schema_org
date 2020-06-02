<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TEventAttendanceModeEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\EventAttendanceModeEnumeration\TMixedEventAttendanceMode;


class MixedEventAttendanceMode extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TEventAttendanceModeEnumeration;
	use TMixedEventAttendanceMode;
}
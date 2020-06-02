<?php

namespace ModuleBZ\SchemaOrg\Thing\Event;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TEvent;
use ModuleBZ\SchemaOrg\Traits\Thing\Event\TCourseInstance;


class CourseInstance extends Thing{
	use TThing;
	use TEvent;
	use TCourseInstance;
}
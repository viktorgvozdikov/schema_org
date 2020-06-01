<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Series;

use ModuleBZ\SchemaOrg\traits\Thing\TEvent;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TSeries;

trait TEventSeries{
	use TEvent;
	use TSeries;

	protected $type = 'EventSeries';
}
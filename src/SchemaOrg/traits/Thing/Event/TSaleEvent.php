<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Event;

use ModuleBZ\SchemaOrg\traits\Thing\TEvent;

trait TSaleEvent{
	use TEvent;

	protected $type = 'SaleEvent';
}
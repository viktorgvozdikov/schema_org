<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Event;

use ModuleBZ\SchemaOrg\traits\Thing\TEvent;

trait TDeliveryEvent{
	use TEvent;

	protected $type = 'DeliveryEvent';
}
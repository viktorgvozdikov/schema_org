<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Event;

use ModuleBZ\SchemaOrg\traits\Thing\TEvent;

trait TFoodEvent{
	use TEvent;

	protected $type = 'FoodEvent';
}
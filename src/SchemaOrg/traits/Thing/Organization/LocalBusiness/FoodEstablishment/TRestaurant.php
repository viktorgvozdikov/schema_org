<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\FoodEstablishment;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TFoodEstablishment;

trait TRestaurant{
	use TFoodEstablishment;

	protected $type = 'Restaurant';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TFoodEstablishment;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\FoodEstablishment\TCafeOrCoffeeShop;


class CafeOrCoffeeShop extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TFoodEstablishment;
	use TCafeOrCoffeeShop;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Product;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TProduct;
use ModuleBZ\SchemaOrg\Traits\Thing\Product\TSomeProducts;


class SomeProducts extends Thing{
	use TThing;
	use TProduct;
	use TSomeProducts;
}
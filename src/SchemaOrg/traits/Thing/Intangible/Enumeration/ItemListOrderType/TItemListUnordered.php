<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\ItemListOrderType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TItemListOrderType;

trait TItemListUnordered{
	use TItemListOrderType;

	protected $type = 'ItemListUnordered';
}
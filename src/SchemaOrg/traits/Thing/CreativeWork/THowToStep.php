<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TItemList;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\TListItem;

trait THowToStep{
	use TCreativeWork;
	use TItemList;
	use TListItem;

	protected $type = 'HowToStep';
}
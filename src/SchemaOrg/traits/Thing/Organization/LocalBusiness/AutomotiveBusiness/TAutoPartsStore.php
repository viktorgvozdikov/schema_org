<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\AutomotiveBusiness;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TAutomotiveBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TStore;

trait TAutoPartsStore{
	use TAutomotiveBusiness;
	use TStore;

	protected $type = 'AutoPartsStore';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Dataset;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TDataset;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Dataset\TDataFeed;


class DataFeed extends Thing{
	use TThing;
	use TCreativeWork;
	use TDataset;
	use TDataFeed;
}
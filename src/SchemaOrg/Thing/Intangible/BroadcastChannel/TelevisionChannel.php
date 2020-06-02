<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\BroadcastChannel;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TBroadcastChannel;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\BroadcastChannel\TTelevisionChannel;


class TelevisionChannel extends Thing{
	use TThing;
	use TIntangible;
	use TBroadcastChannel;
	use TTelevisionChannel;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\BroadcastChannel;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TBroadcastChannel;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\BroadcastChannel\TRadioChannel;


class RadioChannel extends Thing{
	use TThing;
	use TIntangible;
	use TBroadcastChannel;
	use TRadioChannel;
}
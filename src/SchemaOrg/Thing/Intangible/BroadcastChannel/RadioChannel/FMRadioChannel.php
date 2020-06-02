<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\BroadcastChannel\RadioChannel;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TBroadcastChannel;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\BroadcastChannel\TRadioChannel;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\BroadcastChannel\RadioChannel\TFMRadioChannel;


class FMRadioChannel extends Thing{
	use TThing;
	use TIntangible;
	use TBroadcastChannel;
	use TRadioChannel;
	use TFMRadioChannel;
}
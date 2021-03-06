<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Episode;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TEpisode;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Episode\TRadioEpisode;


class RadioEpisode extends Thing{
	use TThing;
	use TCreativeWork;
	use TEpisode;
	use TRadioEpisode;
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\GamePlayMode;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TGamePlayMode;

trait TSinglePlayer{
	use TGamePlayMode;

	protected $type = 'SinglePlayer';
}
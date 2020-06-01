<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\GamePlayMode;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TGamePlayMode;

trait TMultiPlayer{
	use TGamePlayMode;

	protected $type = 'MultiPlayer';
}
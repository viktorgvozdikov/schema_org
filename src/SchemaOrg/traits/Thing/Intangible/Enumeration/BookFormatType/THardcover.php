<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\BookFormatType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TBookFormatType;

trait THardcover{
	use TBookFormatType;

	protected $type = 'Hardcover';
}
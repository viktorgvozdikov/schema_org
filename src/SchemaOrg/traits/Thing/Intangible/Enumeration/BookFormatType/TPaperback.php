<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\BookFormatType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TBookFormatType;

trait TPaperback{
	use TBookFormatType;

	protected $type = 'Paperback';
}
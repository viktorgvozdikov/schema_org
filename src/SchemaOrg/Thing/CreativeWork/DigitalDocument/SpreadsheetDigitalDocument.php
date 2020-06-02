<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\DigitalDocument;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TDigitalDocument;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\DigitalDocument\TSpreadsheetDigitalDocument;


class SpreadsheetDigitalDocument extends Thing{
	use TThing;
	use TCreativeWork;
	use TDigitalDocument;
	use TSpreadsheetDigitalDocument;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMediaObject;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject\TImageObject;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject\ImageObject\TBarcode;


class Barcode extends Thing{
	use TThing;
	use TCreativeWork;
	use TMediaObject;
	use TImageObject;
	use TBarcode;
}
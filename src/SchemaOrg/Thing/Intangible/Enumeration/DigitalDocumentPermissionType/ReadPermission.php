<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TEnumeration;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\TDigitalDocumentPermissionType;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Enumeration\DigitalDocumentPermissionType\TReadPermission;


class ReadPermission extends Thing{
	use TThing;
	use TIntangible;
	use TEnumeration;
	use TDigitalDocumentPermissionType;
	use TReadPermission;
}
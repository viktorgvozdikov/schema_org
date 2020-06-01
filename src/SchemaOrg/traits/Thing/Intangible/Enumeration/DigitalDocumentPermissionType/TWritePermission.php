<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TDigitalDocumentPermissionType;

trait TWritePermission{
	use TDigitalDocumentPermissionType;

	protected $type = 'WritePermission';
}
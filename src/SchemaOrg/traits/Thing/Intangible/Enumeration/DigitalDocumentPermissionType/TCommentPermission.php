<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Enumeration\TDigitalDocumentPermissionType;

trait TCommentPermission{
	use TDigitalDocumentPermissionType;

	protected $type = 'CommentPermission';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\OrganizeAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TOrganizeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction\TBookmarkAction;


class BookmarkAction extends Thing{
	use TThing;
	use TAction;
	use TOrganizeAction;
	use TBookmarkAction;
}
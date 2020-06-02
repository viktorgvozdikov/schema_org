<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLibrarySystem;


class LibrarySystem extends Thing{
	use TThing;
	use TOrganization;
	use TLibrarySystem;
}
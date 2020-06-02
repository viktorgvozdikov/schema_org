<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMessage;


class Message extends Thing{
	use TThing;
	use TCreativeWork;
	use TMessage;
}
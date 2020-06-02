<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Message;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TMessage;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Message\TEmailMessage;


class EmailMessage extends Thing{
	use TThing;
	use TCreativeWork;
	use TMessage;
	use TEmailMessage;
}
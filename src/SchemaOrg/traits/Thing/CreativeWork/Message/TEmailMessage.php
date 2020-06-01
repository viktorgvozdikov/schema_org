<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\Message;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TMessage;

trait TEmailMessage{
	use TMessage;

	protected $type = 'EmailMessage';
}
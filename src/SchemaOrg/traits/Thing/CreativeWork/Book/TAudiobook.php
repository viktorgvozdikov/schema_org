<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\Book;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TBook;
use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\MediaObject\TAudioObject;

trait TAudiobook{
	use TBook;
	use TAudioObject;

	protected $type = 'Audiobook';
}
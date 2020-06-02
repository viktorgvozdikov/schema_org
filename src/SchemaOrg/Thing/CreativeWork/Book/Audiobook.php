<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Book;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TBook;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Book\TAudiobook;


class Audiobook extends Thing{
	use TThing;
	use TCreativeWork;
	use TBook;
	use TAudiobook;
}
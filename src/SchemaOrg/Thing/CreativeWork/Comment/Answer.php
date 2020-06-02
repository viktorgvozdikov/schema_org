<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\Comment;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TComment;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Comment\TAnswer;


class Answer extends Thing{
	use TThing;
	use TCreativeWork;
	use TComment;
	use TAnswer;
}
<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\Comment;

use ModuleBZ\SchemaOrg\traits\Thing\CreativeWork\TComment;

trait TCorrectionComment{
	use TComment;

	protected $type = 'CorrectionComment';
}
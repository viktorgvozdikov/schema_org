<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\CreateAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TCreateAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\CreateAction\TFilmAction;


class FilmAction extends Thing{
	use TThing;
	use TAction;
	use TCreateAction;
	use TFilmAction;
}
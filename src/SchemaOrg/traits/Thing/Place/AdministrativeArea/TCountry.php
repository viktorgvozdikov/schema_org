<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Place\AdministrativeArea;

use ModuleBZ\SchemaOrg\traits\Thing\Place\TAdministrativeArea;

trait TCountry{
	use TAdministrativeArea;

	protected $type = 'Country';
}
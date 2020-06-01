<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\EntertainmentBusiness;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TEntertainmentBusiness;
use ModuleBZ\SchemaOrg\traits\Thing\Place\TCivicStructure;

trait TMovieTheater{
	use TEntertainmentBusiness;
	use TCivicStructure;

	protected $type = 'MovieTheater';
}
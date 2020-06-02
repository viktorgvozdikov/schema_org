<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TMedicalTest;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalTest\TImagingTest;


class ImagingTest extends Thing{
	use TThing;
	use TMedicalEntity;
	use TMedicalTest;
	use TImagingTest;
}
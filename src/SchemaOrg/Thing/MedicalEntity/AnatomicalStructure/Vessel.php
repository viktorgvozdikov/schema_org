<?php

namespace ModuleBZ\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TMedicalEntity;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\TAnatomicalStructure;
use ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure\TVessel;


class Vessel extends Thing{
	use TThing;
	use TMedicalEntity;
	use TAnatomicalStructure;
	use TVessel;
}
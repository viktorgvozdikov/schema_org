<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\WebPage\CollectionPage;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TWebPage;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebPage\TCollectionPage;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebPage\CollectionPage\TMediaGallery;


class MediaGallery extends Thing{
	use TThing;
	use TCreativeWork;
	use TWebPage;
	use TCollectionPage;
	use TMediaGallery;
}
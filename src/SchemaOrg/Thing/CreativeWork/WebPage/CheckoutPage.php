<?php

namespace ModuleBZ\SchemaOrg\Thing\CreativeWork\WebPage;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TCreativeWork;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\TWebPage;
use ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebPage\TCheckoutPage;


class CheckoutPage extends Thing{
	use TThing;
	use TCreativeWork;
	use TWebPage;
	use TCheckoutPage;
}
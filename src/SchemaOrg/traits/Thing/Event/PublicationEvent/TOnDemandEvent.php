<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Event\PublicationEvent;

use ModuleBZ\SchemaOrg\traits\Thing\Event\TPublicationEvent;

trait TOnDemandEvent{
	use TPublicationEvent;

	protected $type = 'OnDemandEvent';
}
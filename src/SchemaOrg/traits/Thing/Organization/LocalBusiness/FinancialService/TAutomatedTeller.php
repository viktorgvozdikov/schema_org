<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\FinancialService;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TFinancialService;

trait TAutomatedTeller{
	use TFinancialService;

	protected $type = 'AutomatedTeller';
}
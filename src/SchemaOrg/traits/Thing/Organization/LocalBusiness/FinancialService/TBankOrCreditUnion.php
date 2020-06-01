<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\FinancialService;

use ModuleBZ\SchemaOrg\traits\Thing\Organization\LocalBusiness\TFinancialService;

trait TBankOrCreditUnion{
	use TFinancialService;

	protected $type = 'BankOrCreditUnion';
}
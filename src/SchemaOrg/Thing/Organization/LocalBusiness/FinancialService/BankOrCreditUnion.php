<?php

namespace ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness\FinancialService;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TOrganization;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\TLocalBusiness;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\TFinancialService;
use ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\FinancialService\TBankOrCreditUnion;


class BankOrCreditUnion extends Thing{
	use TThing;
	use TOrganization;
	use TLocalBusiness;
	use TFinancialService;
	use TBankOrCreditUnion;
}
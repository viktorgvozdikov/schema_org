<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TService;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\TFinancialProduct;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\TInvestmentOrDeposit;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit\TBrokerageAccount;


class BrokerageAccount extends Thing{
	use TThing;
	use TIntangible;
	use TService;
	use TFinancialProduct;
	use TInvestmentOrDeposit;
	use TBrokerageAccount;
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Intangible\Service\FinancialProduct\BankAccount;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TIntangible;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\TService;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\TFinancialProduct;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\TBankAccount;
use ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct\BankAccount\TDepositAccount;


class DepositAccount extends Thing{
	use TThing;
	use TIntangible;
	use TService;
	use TFinancialProduct;
	use TBankAccount;
	use TDepositAccount;
}
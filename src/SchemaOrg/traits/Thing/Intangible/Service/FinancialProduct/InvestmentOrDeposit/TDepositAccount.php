<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\TBankAccount;
use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\TInvestmentOrDeposit;

trait TDepositAccount{
	use TBankAccount;
	use TInvestmentOrDeposit;

	protected $type = 'DepositAccount';
}
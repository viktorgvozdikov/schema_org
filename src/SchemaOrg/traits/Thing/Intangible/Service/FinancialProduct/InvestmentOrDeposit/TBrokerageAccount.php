<?php

namespace ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit;

use ModuleBZ\SchemaOrg\traits\Thing\Intangible\Service\FinancialProduct\TInvestmentOrDeposit;

trait TBrokerageAccount{
	use TInvestmentOrDeposit;

	protected $type = 'BrokerageAccount';
}
<?php

namespace ModuleBZ\SchemaOrg\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\Thing;
use ModuleBZ\SchemaOrg\Traits\TThing;
use ModuleBZ\SchemaOrg\Traits\Thing\TAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TTradeAction;
use ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction\TRentAction;


class RentAction extends Thing{
	use TThing;
	use TAction;
	use TTradeAction;
	use TRentAction;
}
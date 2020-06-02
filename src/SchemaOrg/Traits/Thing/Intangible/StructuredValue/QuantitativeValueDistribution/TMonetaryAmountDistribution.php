<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMonetaryAmountDistribution{
	 /**
	 * The currency in which the monetary amount is expressed.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $currency
	 */
	protected $currency;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCurrency($x){
		$this->currency = new Text('Currency',$x);
		return $this;
	}


}
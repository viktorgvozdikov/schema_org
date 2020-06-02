<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TExchangeRateSpecification{
	 /**
	 * The currency in which the monetary amount is expressed.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $currency
	 */
	protected $currency;

	 /**
	 * The current price of a currency.
	 * @var String $currentExchangeRate
	 */
	protected $currentExchangeRate;

	 /**
	 * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
	 * @var String $exchangeRateSpread
	 */
	protected $exchangeRateSpread;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCurrency($x){
		$this->currency = new Text('currency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCurrentExchangeRate($x){
		$this->currentExchangeRate = new Text('currentExchangeRate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExchangeRateSpread($x){
		$this->exchangeRateSpread = new Text('exchangeRateSpread',$x);
		return $this;
	}


}
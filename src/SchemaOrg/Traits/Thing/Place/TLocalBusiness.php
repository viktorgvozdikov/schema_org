<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLocalBusiness{
	 /**
	 * The currency accepted.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $currenciesAccepted
	 */
	protected $currenciesAccepted;

	 /**
	 * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br><br><ul>
	 * <li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
	 * <li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
	 * <li>Here is an example: <code>&lt;time itemprop="openingHours" datetime="Tu,Th 16:00-20:00"&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
	 * <li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop="openingHours" datetime="Mo-Su"&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
	 * </ul>
	 * 
	 * @var String $openingHours
	 */
	protected $openingHours;

	 /**
	 * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
	 * @var String $paymentAccepted
	 */
	protected $paymentAccepted;

	 /**
	 * The price range of the business, for example <code>$$$</code>.
	 * @var String $priceRange
	 */
	protected $priceRange;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCurrenciesAccepted($x){
		$this->currenciesAccepted = new Text('currenciesAccepted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOpeningHours($x){
		$this->openingHours = new Text('openingHours',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentAccepted($x){
		$this->paymentAccepted = new Text('paymentAccepted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceRange($x){
		$this->priceRange = new Text('priceRange',$x);
		return $this;
	}


}
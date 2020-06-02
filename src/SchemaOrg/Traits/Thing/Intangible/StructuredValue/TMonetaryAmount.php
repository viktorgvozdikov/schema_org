<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMonetaryAmount{
	 /**
	 * The currency in which the monetary amount is expressed.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $currency
	 */
	protected $currency;

	 /**
	 * The upper value of some characteristic or property.
	 * @var String $maxValue
	 */
	protected $maxValue;

	 /**
	 * The lower value of some characteristic or property.
	 * @var String $minValue
	 */
	protected $minValue;

	 /**
	 * The date when the item becomes valid.
	 * @var String $validFrom
	 */
	protected $validFrom;

	 /**
	 * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	 * @var String $validThrough
	 */
	protected $validThrough;

	 /**
	 * The value of the quantitative value or property value node.<br><br><ul>
	 * <li>For <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
	 * <li>For <a class="localLink" href="/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $value
	 */
	protected $value;


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
	public function setMaxValue($x){
		$this->maxValue = new Text('maxValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinValue($x){
		$this->minValue = new Text('minValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFrom($x){
		$this->validFrom = new Text('validFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidThrough($x){
		$this->validThrough = new Text('validThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValue($x){
		$this->value = new Text('value',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPriceSpecification{
	 /**
	 * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	 * @var String $eligibleQuantity
	 */
	protected $eligibleQuantity;

	 /**
	 * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
	 * @var String $eligibleTransactionVolume
	 */
	protected $eligibleTransactionVolume;

	 /**
	 * The highest price if the price is a range.
	 * @var String $maxPrice
	 */
	protected $maxPrice;

	 /**
	 * The lowest price if the price is a range.
	 * @var String $minPrice
	 */
	protected $minPrice;

	 /**
	 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use the <a class="localLink" href="/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * <li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * </ul>
	 * 
	 * @var String $price
	 */
	protected $price;

	 /**
	 * The currency of the price, or a price component when attached to <a class="localLink" href="/PriceSpecification">PriceSpecification</a> and its subtypes.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $priceCurrency
	 */
	protected $priceCurrency;

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
	 * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
	 * @var String $valueAddedTaxIncluded
	 */
	protected $valueAddedTaxIncluded;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleQuantity($x){
		$this->eligibleQuantity = new Text('eligibleQuantity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleTransactionVolume($x){
		$this->eligibleTransactionVolume = new Text('eligibleTransactionVolume',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaxPrice($x){
		$this->maxPrice = new Text('maxPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinPrice($x){
		$this->minPrice = new Text('minPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrice($x){
		$this->price = new Text('price',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceCurrency($x){
		$this->priceCurrency = new Text('priceCurrency',$x);
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
	public function setValueAddedTaxIncluded($x){
		$this->valueAddedTaxIncluded = new Text('valueAddedTaxIncluded',$x);
		return $this;
	}


}
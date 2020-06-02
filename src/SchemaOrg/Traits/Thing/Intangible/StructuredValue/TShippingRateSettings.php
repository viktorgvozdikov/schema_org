<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TShippingRateSettings{
	 /**
	 * Indicates, as part of an <a class="localLink" href="/OfferShippingDetails">OfferShippingDetails</a>, when shipping to a particular <a class="localLink" href="/shippingDestination">shippingDestination</a> is not available.
	 * @var String $doesNotShip
	 */
	protected $doesNotShip;

	 /**
	 * A monetary value above which (or equal to) the shipping rate becomes free. Intended to be used via an <a class="localLink" href="/OfferShippingSpecification">OfferShippingSpecification</a> with <a class="localLink" href="/shippingSettingsLink">shippingSettingsLink</a> matching this <a class="localLink" href="/ShippingSettings">ShippingSettings</a>.
	 * @var String $freeShippingThreshold
	 */
	protected $freeShippingThreshold;

	 /**
	 * This can be marked 'true' to indicate that some published ShippingRateSettings are intended to apply to all <a class="localLink" href="/OfferShippingDetails">OfferShippingDetails</a> published by the same merchant, when referenced by a <a class="localLink" href="/shippingSettingsLink">shippingSettingsLink</a> in those settings. It is not meaningful to use a 'true' value for this property alongside a shippingLabel, since this property is for use with unlabelled ShippingRateSettings.
	 * @var String $isUnlabelledFallback
	 */
	protected $isUnlabelledFallback;

	 /**
	 * indicates (possibly multiple) shipping destinations. These can be defined in several ways e.g. postalCode ranges.
	 * @var String $shippingDestination
	 */
	protected $shippingDestination;

	 /**
	 * Label to match an <a class="localLink" href="/OfferShippingDetails">OfferShippingDetails</a> with a <a class="localLink" href="/ShippingRateSettings">ShippingRateSettings</a> (within the context of a <a class="localLink" href="/shippingSettingsLink">shippingSettingsLink</a> cross-reference).
	 * @var String $shippingLabel
	 */
	protected $shippingLabel;

	 /**
	 * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the <a class="localLink" href="/MonetaryAmount">MonetaryAmount</a>) are most appropriate.
	 * @var String $shippingRate
	 */
	protected $shippingRate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDoesNotShip($x){
		$this->doesNotShip = new Text('doesNotShip',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFreeShippingThreshold($x){
		$this->freeShippingThreshold = new Text('freeShippingThreshold',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsUnlabelledFallback($x){
		$this->isUnlabelledFallback = new Text('isUnlabelledFallback',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setShippingDestination($x){
		$this->shippingDestination = new Text('shippingDestination',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setShippingLabel($x){
		$this->shippingLabel = new Text('shippingLabel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setShippingRate($x){
		$this->shippingRate = new Text('shippingRate',$x);
		return $this;
	}


}
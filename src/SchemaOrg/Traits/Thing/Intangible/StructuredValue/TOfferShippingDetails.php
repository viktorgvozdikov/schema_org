<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOfferShippingDetails{
	 /**
	 * The total delay between the receipt of the order and the goods reaching the final customer.
	 * @var String $deliveryTime
	 */
	protected $deliveryTime;

	 /**
	 * Indicates, as part of an <a class="localLink" href="/OfferShippingDetails">OfferShippingDetails</a>, when shipping to a particular <a class="localLink" href="/shippingDestination">shippingDestination</a> is not available.
	 * @var String $doesNotShip
	 */
	protected $doesNotShip;

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
	 * Link to a page containing <a class="localLink" href="/ShippingRateSettings">ShippingRateSettings</a> and <a class="localLink" href="/DeliveryTimeSettings">DeliveryTimeSettings</a> details.
	 * @var String $shippingSettingsLink
	 */
	protected $shippingSettingsLink;

	 /**
	 * Label to match an <a class="localLink" href="/OfferShippingDetails">OfferShippingDetails</a> with a <a class="localLink" href="/DeliveryTimeSettings">DeliveryTimeSettings</a> (within the context of a <a class="localLink" href="/shippingSettingsLink">shippingSettingsLink</a> cross-reference).
	 * @var String $transitTimeLabel
	 */
	protected $transitTimeLabel;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryTime($x){
		$this->deliveryTime = new Text('deliveryTime',$x);
		return $this;
	}

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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setShippingSettingsLink($x){
		$this->shippingSettingsLink = new Text('shippingSettingsLink',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTransitTimeLabel($x){
		$this->transitTimeLabel = new Text('transitTimeLabel',$x);
		return $this;
	}


}
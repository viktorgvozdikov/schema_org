<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDeliveryTimeSettings{
	 /**
	 * The total delay between the receipt of the order and the goods reaching the final customer.
	 * @var String $deliveryTime
	 */
	protected $deliveryTime;

	 /**
	 * indicates (possibly multiple) shipping destinations. These can be defined in several ways e.g. postalCode ranges.
	 * @var String $shippingDestination
	 */
	protected $shippingDestination;

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
	public function setShippingDestination($x){
		$this->shippingDestination = new Text('shippingDestination',$x);
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
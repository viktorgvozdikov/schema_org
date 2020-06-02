<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TShippingDeliveryTime{
	 /**
	 * Days of the week when the merchant typically operates, indicated via opening hours markup.
	 * @var String $businessDays
	 */
	protected $businessDays;

	 /**
	 * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the <a class="localLink" href="/ShippingRateSettings">ShippingRateSettings</a> publication pattern. The time is indicated using the time notation from the ISO-8601 DateTime format, e.g.
	 *       14:45:15Z would represent a daily cutoff at 14:45h UTC.
	 * @var String $cutoffTime
	 */
	protected $cutoffTime;

	 /**
	 * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
	 * @var String $handlingTime
	 */
	protected $handlingTime;

	 /**
	 * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue, unitCode (d for DAY).
	 * @var String $transitTime
	 */
	protected $transitTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusinessDays($x){
		$this->businessDays = new Text('businessDays',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCutoffTime($x){
		$this->cutoffTime = new Text('cutoffTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHandlingTime($x){
		$this->handlingTime = new Text('handlingTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTransitTime($x){
		$this->transitTime = new Text('transitTime',$x);
		return $this;
	}


}
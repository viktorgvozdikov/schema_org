<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPaymentChargeSpecification{
	 /**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * @var String $appliesToDeliveryMethod
	 */
	protected $appliesToDeliveryMethod;

	 /**
	 * The payment method(s) to which the payment charge specification applies.
	 * @var String $appliesToPaymentMethod
	 */
	protected $appliesToPaymentMethod;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAppliesToDeliveryMethod($x){
		$this->appliesToDeliveryMethod = new Text('appliesToDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAppliesToPaymentMethod($x){
		$this->appliesToPaymentMethod = new Text('appliesToPaymentMethod',$x);
		return $this;
	}


}
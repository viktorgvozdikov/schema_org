<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOrderAction{
	 /**
	 * A sub property of instrument. The method of delivery.
	 * @var String $deliveryMethod
	 */
	protected $deliveryMethod;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryMethod($x){
		$this->deliveryMethod = new Text('DeliveryMethod',$x);
		return $this;
	}


}
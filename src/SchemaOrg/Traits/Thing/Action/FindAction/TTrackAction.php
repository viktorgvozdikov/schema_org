<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\FindAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTrackAction{
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
		$this->deliveryMethod = new Text('deliveryMethod',$x);
		return $this;
	}


}
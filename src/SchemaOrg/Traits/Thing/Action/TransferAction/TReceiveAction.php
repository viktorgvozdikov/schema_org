<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReceiveAction{
	 /**
	 * A sub property of instrument. The method of delivery.
	 * @var String $deliveryMethod
	 */
	protected $deliveryMethod;

	 /**
	 * A sub property of participant. The participant who is at the sending end of the action.
	 * @var String $sender
	 */
	protected $sender;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryMethod($x){
		$this->deliveryMethod = new Text('DeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSender($x){
		$this->sender = new Text('Sender',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSendAction{
	 /**
	 * A sub property of instrument. The method of delivery.
	 * @var String $deliveryMethod
	 */
	protected $deliveryMethod;

	 /**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @var String $recipient
	 */
	protected $recipient;


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
	public function setRecipient($x){
		$this->recipient = new Text('Recipient',$x);
		return $this;
	}


}
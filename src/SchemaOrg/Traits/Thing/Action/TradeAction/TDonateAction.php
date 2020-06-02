<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDonateAction{
	 /**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @var String $recipient
	 */
	protected $recipient;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipient($x){
		$this->recipient = new Text('recipient',$x);
		return $this;
	}


}
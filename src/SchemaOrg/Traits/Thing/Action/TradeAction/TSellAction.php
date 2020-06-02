<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSellAction{
	 /**
	 * A sub property of participant. The participant/person/organization that bought the object.
	 * @var String $buyer
	 */
	protected $buyer;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBuyer($x){
		$this->buyer = new Text('buyer',$x);
		return $this;
	}


}
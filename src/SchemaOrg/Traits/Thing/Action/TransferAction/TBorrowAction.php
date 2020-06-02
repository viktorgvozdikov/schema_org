<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBorrowAction{
	 /**
	 * A sub property of participant. The person that lends the object being borrowed.
	 * @var String $lender
	 */
	protected $lender;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setLender($x){
		$this->lender = new Text('Lender',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TransferAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLendAction{
	 /**
	 * A sub property of participant. The person that borrows the object being lent.
	 * @var String $borrower
	 */
	protected $borrower;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBorrower($x){
		$this->borrower = new Text('borrower',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service\FinancialProduct;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPaymentCard{
	 /**
	 * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
	 * @var String $cashBack
	 */
	protected $cashBack;

	 /**
	 * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
	 * @var String $contactlessPayment
	 */
	protected $contactlessPayment;

	 /**
	 * A floor limit is the amount of money above which credit card transactions must be authorized.
	 * @var String $floorLimit
	 */
	protected $floorLimit;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCashBack($x){
		$this->cashBack = new Text('CashBack',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactlessPayment($x){
		$this->contactlessPayment = new Text('ContactlessPayment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFloorLimit($x){
		$this->floorLimit = new Text('FloorLimit',$x);
		return $this;
	}


}
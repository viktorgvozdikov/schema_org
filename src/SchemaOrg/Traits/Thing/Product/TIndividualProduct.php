<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Product;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TIndividualProduct{
	 /**
	 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	 * @var String $serialNumber
	 */
	protected $serialNumber;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSerialNumber($x){
		$this->serialNumber = new Text('serialNumber',$x);
		return $this;
	}


}
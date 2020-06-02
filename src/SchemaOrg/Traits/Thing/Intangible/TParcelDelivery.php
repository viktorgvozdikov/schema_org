<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TParcelDelivery{
	 /**
	 * Destination address.
	 * @var String $deliveryAddress
	 */
	protected $deliveryAddress;

	 /**
	 * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
	 * @var String $deliveryStatus
	 */
	protected $deliveryStatus;

	 /**
	 * The earliest date the package may arrive.
	 * @var String $expectedArrivalFrom
	 */
	protected $expectedArrivalFrom;

	 /**
	 * The latest date the package may arrive.
	 * @var String $expectedArrivalUntil
	 */
	protected $expectedArrivalUntil;

	 /**
	 * Method used for delivery or shipping.
	 * @var String $hasDeliveryMethod
	 */
	protected $hasDeliveryMethod;

	 /**
	 * Item(s) being shipped.
	 * @var String $itemShipped
	 */
	protected $itemShipped;

	 /**
	 * Shipper's address.
	 * @var String $originAddress
	 */
	protected $originAddress;

	 /**
	 * The overall order the items in this delivery were included in.
	 * @var String $partOfOrder
	 */
	protected $partOfOrder;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * Shipper tracking number.
	 * @var String $trackingNumber
	 */
	protected $trackingNumber;

	 /**
	 * Tracking url for the parcel delivery.
	 * @var String $trackingUrl
	 */
	protected $trackingUrl;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryAddress($x){
		$this->deliveryAddress = new Text('deliveryAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryStatus($x){
		$this->deliveryStatus = new Text('deliveryStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectedArrivalFrom($x){
		$this->expectedArrivalFrom = new Text('expectedArrivalFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectedArrivalUntil($x){
		$this->expectedArrivalUntil = new Text('expectedArrivalUntil',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasDeliveryMethod($x){
		$this->hasDeliveryMethod = new Text('hasDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemShipped($x){
		$this->itemShipped = new Text('itemShipped',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOriginAddress($x){
		$this->originAddress = new Text('originAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfOrder($x){
		$this->partOfOrder = new Text('partOfOrder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrackingNumber($x){
		$this->trackingNumber = new Text('trackingNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrackingUrl($x){
		$this->trackingUrl = new Text('trackingUrl',$x);
		return $this;
	}


}
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
		$this->deliveryAddress = new Text('DeliveryAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryStatus($x){
		$this->deliveryStatus = new Text('DeliveryStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectedArrivalFrom($x){
		$this->expectedArrivalFrom = new Text('ExpectedArrivalFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectedArrivalUntil($x){
		$this->expectedArrivalUntil = new Text('ExpectedArrivalUntil',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasDeliveryMethod($x){
		$this->hasDeliveryMethod = new Text('HasDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemShipped($x){
		$this->itemShipped = new Text('ItemShipped',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOriginAddress($x){
		$this->originAddress = new Text('OriginAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfOrder($x){
		$this->partOfOrder = new Text('PartOfOrder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('Provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrackingNumber($x){
		$this->trackingNumber = new Text('TrackingNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrackingUrl($x){
		$this->trackingUrl = new Text('TrackingUrl',$x);
		return $this;
	}


}
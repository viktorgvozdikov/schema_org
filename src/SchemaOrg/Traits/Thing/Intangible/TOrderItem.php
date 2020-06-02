<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOrderItem{
	 /**
	 * The delivery of the parcel related to this order or order item.
	 * @var String $orderDelivery
	 */
	protected $orderDelivery;

	 /**
	 * The identifier of the order item.
	 * @var String $orderItemNumber
	 */
	protected $orderItemNumber;

	 /**
	 * The current status of the order item.
	 * @var String $orderItemStatus
	 */
	protected $orderItemStatus;

	 /**
	 * The number of the item ordered. If the property is not set, assume the quantity is one.
	 * @var String $orderQuantity
	 */
	protected $orderQuantity;

	 /**
	 * The item ordered.
	 * @var String $orderedItem
	 */
	protected $orderedItem;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderDelivery($x){
		$this->orderDelivery = new Text('orderDelivery',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderItemNumber($x){
		$this->orderItemNumber = new Text('orderItemNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderItemStatus($x){
		$this->orderItemStatus = new Text('orderItemStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderQuantity($x){
		$this->orderQuantity = new Text('orderQuantity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderedItem($x){
		$this->orderedItem = new Text('orderedItem',$x);
		return $this;
	}


}
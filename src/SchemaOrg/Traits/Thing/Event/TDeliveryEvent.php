<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDeliveryEvent{
	 /**
	 * Password, PIN, or access code needed for delivery (e.g. from a locker).
	 * @var String $accessCode
	 */
	protected $accessCode;

	 /**
	 * When the item is available for pickup from the store, locker, etc.
	 * @var String $availableFrom
	 */
	protected $availableFrom;

	 /**
	 * After this date, the item will no longer be available for pickup.
	 * @var String $availableThrough
	 */
	protected $availableThrough;

	 /**
	 * Method used for delivery or shipping.
	 * @var String $hasDeliveryMethod
	 */
	protected $hasDeliveryMethod;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccessCode($x){
		$this->accessCode = new Text('accessCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableFrom($x){
		$this->availableFrom = new Text('availableFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableThrough($x){
		$this->availableThrough = new Text('availableThrough',$x);
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


}
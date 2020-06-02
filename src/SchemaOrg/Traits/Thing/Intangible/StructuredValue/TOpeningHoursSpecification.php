<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOpeningHoursSpecification{
	 /**
	 * The closing hour of the place or service on the given day(s) of the week.
	 * @var String $closes
	 */
	protected $closes;

	 /**
	 * The day of the week for which these opening hours are valid.
	 * @var String $dayOfWeek
	 */
	protected $dayOfWeek;

	 /**
	 * The opening hour of the place or service on the given day(s) of the week.
	 * @var String $opens
	 */
	protected $opens;

	 /**
	 * The date when the item becomes valid.
	 * @var String $validFrom
	 */
	protected $validFrom;

	 /**
	 * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	 * @var String $validThrough
	 */
	protected $validThrough;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCloses($x){
		$this->closes = new Text('closes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDayOfWeek($x){
		$this->dayOfWeek = new Text('dayOfWeek',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOpens($x){
		$this->opens = new Text('opens',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFrom($x){
		$this->validFrom = new Text('validFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidThrough($x){
		$this->validThrough = new Text('validThrough',$x);
		return $this;
	}


}
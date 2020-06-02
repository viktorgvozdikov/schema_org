<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PropertyValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLocationFeatureSpecification{
	 /**
	 * The hours during which this service or contact is available.
	 * @var String $hoursAvailable
	 */
	protected $hoursAvailable;

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
	public function setHoursAvailable($x){
		$this->hoursAvailable = new Text('hoursAvailable',$x);
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
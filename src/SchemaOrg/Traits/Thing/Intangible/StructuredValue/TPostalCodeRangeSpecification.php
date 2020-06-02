<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPostalCodeRangeSpecification{
	 /**
	 * First postal code in a range (included).
	 * @var String $postalCodeBegin
	 */
	protected $postalCodeBegin;

	 /**
	 * Last postal code in the range (included). Needs to be after <a class="localLink" href="/postalCodeBegin">postalCodeBegin</a>.
	 * @var String $postalCodeEnd
	 */
	protected $postalCodeEnd;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCodeBegin($x){
		$this->postalCodeBegin = new Text('postalCodeBegin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCodeEnd($x){
		$this->postalCodeEnd = new Text('postalCodeEnd',$x);
		return $this;
	}


}
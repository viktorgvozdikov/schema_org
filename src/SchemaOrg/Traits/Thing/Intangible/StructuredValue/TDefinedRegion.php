<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDefinedRegion{
	 /**
	 * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
	 * @var String $addressCountry
	 */
	protected $addressCountry;

	 /**
	 * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level <a href="https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country">Administrative division</a>
	 * 
	 * @var String $addressRegion
	 */
	protected $addressRegion;

	 /**
	 * The postal code. For example, 94043.
	 * @var String $postalCode
	 */
	protected $postalCode;

	 /**
	 * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
	 * @var String $postalCodePrefix
	 */
	protected $postalCodePrefix;

	 /**
	 * A defined range of postal codes.
	 * @var String $postalCodeRange
	 */
	protected $postalCodeRange;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddressCountry($x){
		$this->addressCountry = new Text('AddressCountry',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddressRegion($x){
		$this->addressRegion = new Text('AddressRegion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCode($x){
		$this->postalCode = new Text('PostalCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCodePrefix($x){
		$this->postalCodePrefix = new Text('PostalCodePrefix',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCodeRange($x){
		$this->postalCodeRange = new Text('PostalCodeRange',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\ContactPoint;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPostalAddress{
	 /**
	 * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
	 * @var String $addressCountry
	 */
	protected $addressCountry;

	 /**
	 * The locality in which the street address is, and which is in the region. For example, Mountain View.
	 * @var String $addressLocality
	 */
	protected $addressLocality;

	 /**
	 * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level <a href="https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country">Administrative division</a>
	 * 
	 * @var String $addressRegion
	 */
	protected $addressRegion;

	 /**
	 * The post office box number for PO box addresses.
	 * @var String $postOfficeBoxNumber
	 */
	protected $postOfficeBoxNumber;

	 /**
	 * The postal code. For example, 94043.
	 * @var String $postalCode
	 */
	protected $postalCode;

	 /**
	 * The street address. For example, 1600 Amphitheatre Pkwy.
	 * @var String $streetAddress
	 */
	protected $streetAddress;


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
	public function setAddressLocality($x){
		$this->addressLocality = new Text('AddressLocality',$x);
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
	public function setPostOfficeBoxNumber($x){
		$this->postOfficeBoxNumber = new Text('PostOfficeBoxNumber',$x);
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
	public function setStreetAddress($x){
		$this->streetAddress = new Text('StreetAddress',$x);
		return $this;
	}


}
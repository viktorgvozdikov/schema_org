<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGeoCoordinates{
	 /**
	 * Physical address of the item.
	 * @var String $address
	 */
	protected $address;

	 /**
	 * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
	 * @var String $addressCountry
	 */
	protected $addressCountry;

	 /**
	 * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
	 * @var String $elevation
	 */
	protected $elevation;

	 /**
	 * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
	 * @var String $latitude
	 */
	protected $latitude;

	 /**
	 * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
	 * @var String $longitude
	 */
	protected $longitude;

	 /**
	 * The postal code. For example, 94043.
	 * @var String $postalCode
	 */
	protected $postalCode;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddress($x){
		$this->address = new Text('address',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddressCountry($x){
		$this->addressCountry = new Text('addressCountry',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setElevation($x){
		$this->elevation = new Text('elevation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLatitude($x){
		$this->latitude = new Text('latitude',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLongitude($x){
		$this->longitude = new Text('longitude',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPostalCode($x){
		$this->postalCode = new Text('postalCode',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGeoShape{
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
	 * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
	 * @var String $box
	 */
	protected $box;

	 /**
	 * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
	 * @var String $circle
	 */
	protected $circle;

	 /**
	 * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
	 * @var String $elevation
	 */
	protected $elevation;

	 /**
	 * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
	 * @var String $line
	 */
	protected $line;

	 /**
	 * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
	 * @var String $polygon
	 */
	protected $polygon;

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
	public function setBox($x){
		$this->box = new Text('box',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCircle($x){
		$this->circle = new Text('circle',$x);
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
	public function setLine($x){
		$this->line = new Text('line',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPolygon($x){
		$this->polygon = new Text('polygon',$x);
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
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGeospatialGeometry{
	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoContains
	 */
	protected $geoContains;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCoveredBy
	 */
	protected $geoCoveredBy;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCovers
	 */
	protected $geoCovers;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCrosses
	 */
	protected $geoCrosses;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>)
	 * @var String $geoDisjoint
	 */
	protected $geoDisjoint;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
	 * @var String $geoEquals
	 */
	protected $geoEquals;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoIntersects
	 */
	protected $geoIntersects;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoOverlaps
	 */
	protected $geoOverlaps;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a> )
	 * @var String $geoTouches
	 */
	protected $geoTouches;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoWithin
	 */
	protected $geoWithin;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoContains($x){
		$this->geoContains = new Text('geoContains',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCoveredBy($x){
		$this->geoCoveredBy = new Text('geoCoveredBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCovers($x){
		$this->geoCovers = new Text('geoCovers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCrosses($x){
		$this->geoCrosses = new Text('geoCrosses',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoDisjoint($x){
		$this->geoDisjoint = new Text('geoDisjoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoEquals($x){
		$this->geoEquals = new Text('geoEquals',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoIntersects($x){
		$this->geoIntersects = new Text('geoIntersects',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoOverlaps($x){
		$this->geoOverlaps = new Text('geoOverlaps',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoTouches($x){
		$this->geoTouches = new Text('geoTouches',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoWithin($x){
		$this->geoWithin = new Text('geoWithin',$x);
		return $this;
	}


}
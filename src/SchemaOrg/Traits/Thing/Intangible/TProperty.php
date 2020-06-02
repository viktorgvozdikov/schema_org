<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TProperty{
	 /**
	 * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
	 * @var String $domainIncludes
	 */
	protected $domainIncludes;

	 /**
	 * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
	 * @var String $inverseOf
	 */
	protected $inverseOf;

	 /**
	 * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
	 * @var String $rangeIncludes
	 */
	protected $rangeIncludes;

	 /**
	 * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	 * @var String $supersededBy
	 */
	protected $supersededBy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDomainIncludes($x){
		$this->domainIncludes = new Text('DomainIncludes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInverseOf($x){
		$this->inverseOf = new Text('InverseOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRangeIncludes($x){
		$this->rangeIncludes = new Text('RangeIncludes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupersededBy($x){
		$this->supersededBy = new Text('SupersededBy',$x);
		return $this;
	}


}
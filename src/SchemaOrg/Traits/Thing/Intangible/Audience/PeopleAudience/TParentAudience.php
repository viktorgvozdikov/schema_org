<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience\PeopleAudience;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TParentAudience{
	 /**
	 * Maximal age of the child.
	 * @var String $childMaxAge
	 */
	protected $childMaxAge;

	 /**
	 * Minimal age of the child.
	 * @var String $childMinAge
	 */
	protected $childMinAge;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setChildMaxAge($x){
		$this->childMaxAge = new Text('ChildMaxAge',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setChildMinAge($x){
		$this->childMinAge = new Text('ChildMinAge',$x);
		return $this;
	}


}
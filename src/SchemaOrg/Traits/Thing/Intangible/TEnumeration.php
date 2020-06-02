<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEnumeration{
	 /**
	 * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	 * @var String $supersededBy
	 */
	protected $supersededBy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupersededBy($x){
		$this->supersededBy = new Text('SupersededBy',$x);
		return $this;
	}


}
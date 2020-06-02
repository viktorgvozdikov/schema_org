<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TThesis{
	 /**
	 * Qualification, candidature, degree, application that Thesis supports.
	 * @var String $inSupportOf
	 */
	protected $inSupportOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInSupportOf($x){
		$this->inSupportOf = new Text('InSupportOf',$x);
		return $this;
	}


}
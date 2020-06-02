<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDefinedTermSet{
	 /**
	 * A Defined Term contained in this term set.
	 * @var String $hasDefinedTerm
	 */
	protected $hasDefinedTerm;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasDefinedTerm($x){
		$this->hasDefinedTerm = new Text('hasDefinedTerm',$x);
		return $this;
	}


}
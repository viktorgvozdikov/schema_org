<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\DefinedTermSet;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCategoryCodeSet{
	 /**
	 * A Category code contained in this code set.
	 * @var String $hasCategoryCode
	 */
	protected $hasCategoryCode;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasCategoryCode($x){
		$this->hasCategoryCode = new Text('HasCategoryCode',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\DefinedTerm;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCategoryCode{
	 /**
	 * A short textual code that uniquely identifies the value.
	 * @var String $codeValue
	 */
	protected $codeValue;

	 /**
	 * A <a class="localLink" href="/CategoryCodeSet">CategoryCodeSet</a> that contains this category code.
	 * @var String $inCodeSet
	 */
	protected $inCodeSet;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCodeValue($x){
		$this->codeValue = new Text('codeValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInCodeSet($x){
		$this->inCodeSet = new Text('inCodeSet',$x);
		return $this;
	}


}
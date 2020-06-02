<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDefinedTerm{
	 /**
	 * A <a class="localLink" href="/DefinedTermSet">DefinedTermSet</a> that contains this term.
	 * @var String $inDefinedTermSet
	 */
	protected $inDefinedTermSet;

	 /**
	 * A code that identifies this <a class="localLink" href="/DefinedTerm">DefinedTerm</a> within a <a class="localLink" href="/DefinedTermSet">DefinedTermSet</a>
	 * 
	 * @var String $termCode
	 */
	protected $termCode;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInDefinedTermSet($x){
		$this->inDefinedTermSet = new Text('InDefinedTermSet',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTermCode($x){
		$this->termCode = new Text('TermCode',$x);
		return $this;
	}


}
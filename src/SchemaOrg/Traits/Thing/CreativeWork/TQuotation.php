<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TQuotation{
	 /**
	 * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
	 * @var String $spokenByCharacter
	 */
	protected $spokenByCharacter;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpokenByCharacter($x){
		$this->spokenByCharacter = new Text('spokenByCharacter',$x);
		return $this;
	}


}
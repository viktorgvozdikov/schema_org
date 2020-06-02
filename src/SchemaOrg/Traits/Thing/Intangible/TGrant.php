<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGrant{
	 /**
	 * Indicates an item funded or sponsored through a <a class="localLink" href="/Grant">Grant</a>.
	 * @var String $fundedItem
	 */
	protected $fundedItem;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setFundedItem($x){
		$this->fundedItem = new Text('fundedItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('sponsor',$x);
		return $this;
	}


}
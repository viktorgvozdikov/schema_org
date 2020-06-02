<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Grant;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMonetaryGrant{
	 /**
	 * The amount of money.
	 * @var String $amount
	 */
	protected $amount;

	 /**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @var String $funder
	 */
	protected $funder;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmount($x){
		$this->amount = new Text('Amount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunder($x){
		$this->funder = new Text('Funder',$x);
		return $this;
	}


}
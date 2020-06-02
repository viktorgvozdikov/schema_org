<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCorporation{
	 /**
	 * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier Codes (MIC) specified in ISO15022.
	 * @var String $tickerSymbol
	 */
	protected $tickerSymbol;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setTickerSymbol($x){
		$this->tickerSymbol = new Text('tickerSymbol',$x);
		return $this;
	}


}
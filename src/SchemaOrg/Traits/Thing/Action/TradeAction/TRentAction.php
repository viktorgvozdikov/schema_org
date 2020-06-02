<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRentAction{
	 /**
	 * A sub property of participant. The owner of the real estate property.
	 * @var String $landlord
	 */
	protected $landlord;

	 /**
	 * A sub property of participant. The real estate agent involved in the action.
	 * @var String $realEstateAgent
	 */
	protected $realEstateAgent;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setLandlord($x){
		$this->landlord = new Text('Landlord',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRealEstateAgent($x){
		$this->realEstateAgent = new Text('RealEstateAgent',$x);
		return $this;
	}


}
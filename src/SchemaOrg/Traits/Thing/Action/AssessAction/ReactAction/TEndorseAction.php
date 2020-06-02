<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\ReactAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEndorseAction{
	 /**
	 * A sub property of participant. The person/organization being supported.
	 * @var String $endorsee
	 */
	protected $endorsee;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndorsee($x){
		$this->endorsee = new Text('Endorsee',$x);
		return $this;
	}


}
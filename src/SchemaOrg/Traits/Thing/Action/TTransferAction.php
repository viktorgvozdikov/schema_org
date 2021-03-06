<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTransferAction{
	 /**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * @var String $fromLocation
	 */
	protected $fromLocation;

	 /**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @var String $toLocation
	 */
	protected $toLocation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setFromLocation($x){
		$this->fromLocation = new Text('fromLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setToLocation($x){
		$this->toLocation = new Text('toLocation',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\UpdateAction\AddAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TInsertAction{
	 /**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @var String $toLocation
	 */
	protected $toLocation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setToLocation($x){
		$this->toLocation = new Text('ToLocation',$x);
		return $this;
	}


}
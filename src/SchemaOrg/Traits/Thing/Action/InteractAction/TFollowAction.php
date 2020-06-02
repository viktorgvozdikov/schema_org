<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFollowAction{
	 /**
	 * A sub property of object. The person or organization being followed.
	 * @var String $followee
	 */
	protected $followee;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setFollowee($x){
		$this->followee = new Text('followee',$x);
		return $this;
	}


}
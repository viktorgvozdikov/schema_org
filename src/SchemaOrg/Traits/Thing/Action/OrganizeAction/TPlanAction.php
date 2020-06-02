<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\OrganizeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPlanAction{
	 /**
	 * The time the object is scheduled to.
	 * @var String $scheduledTime
	 */
	protected $scheduledTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setScheduledTime($x){
		$this->scheduledTime = new Text('scheduledTime',$x);
		return $this;
	}


}
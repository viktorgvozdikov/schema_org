<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLeaveAction{
	 /**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes <a href="/events">events</a>.
	 * @var String $event
	 */
	protected $event;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvent($x){
		$this->event = new Text('Event',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPlayAction{
	 /**
	 * An intended audience, i.e. a group for whom something was created. Supersedes <a href="/serviceAudience">serviceAudience</a>.
	 * @var String $audience
	 */
	protected $audience;

	 /**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes <a href="/events">events</a>.
	 * @var String $event
	 */
	protected $event;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudience($x){
		$this->audience = new Text('audience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvent($x){
		$this->event = new Text('event',$x);
		return $this;
	}


}
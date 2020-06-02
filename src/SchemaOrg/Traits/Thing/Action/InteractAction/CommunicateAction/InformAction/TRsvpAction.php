<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\CommunicateAction\InformAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRsvpAction{
	 /**
	 * If responding yes, the number of guests who will attend in addition to the invitee.
	 * @var String $additionalNumberOfGuests
	 */
	protected $additionalNumberOfGuests;

	 /**
	 * Comments, typically from users.
	 * @var String $comment
	 */
	protected $comment;

	 /**
	 * The response (yes, no, maybe) to the RSVP.
	 * @var String $rsvpResponse
	 */
	protected $rsvpResponse;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalNumberOfGuests($x){
		$this->additionalNumberOfGuests = new Text('additionalNumberOfGuests',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setComment($x){
		$this->comment = new Text('comment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRsvpResponse($x){
		$this->rsvpResponse = new Text('rsvpResponse',$x);
		return $this;
	}


}
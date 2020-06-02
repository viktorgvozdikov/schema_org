<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAction{
	 /**
	 * Indicates the current disposition of the Action.
	 * @var String $actionStatus
	 */
	protected $actionStatus;

	 /**
	 * The direct performer or driver of the action (animate or inanimate). e.g. <em>John</em> wrote a book.
	 * @var String $agent
	 */
	protected $agent;

	 /**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $endTime
	 */
	protected $endTime;

	 /**
	 * For failed actions, more information on the cause of the failure.
	 * @var String $error
	 */
	protected $error;

	 /**
	 * The object that helped the agent perform the action. e.g. John wrote a book with <em>a pen</em>.
	 * @var String $instrument
	 */
	protected $instrument;

	 /**
	 * The location of for example where the event is happening, an organization is located, or where an action takes place.
	 * @var String $location
	 */
	protected $location;

	 /**
	 * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read <em>a book</em>.
	 * @var String $object
	 */
	protected $object;

	 /**
	 * Other co-agents that participated in the action indirectly. e.g. John wrote a book with <em>Steve</em>.
	 * @var String $participant
	 */
	protected $participant;

	 /**
	 * The result produced in the action. e.g. John wrote <em>a book</em>.
	 * @var String $result
	 */
	protected $result;

	 /**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $startTime
	 */
	protected $startTime;

	 /**
	 * Indicates a target EntryPoint for an Action.
	 * @var String $target
	 */
	protected $target;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionStatus($x){
		$this->actionStatus = new Text('actionStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAgent($x){
		$this->agent = new Text('agent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndTime($x){
		$this->endTime = new Text('endTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setError($x){
		$this->error = new Text('error',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInstrument($x){
		$this->instrument = new Text('instrument',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLocation($x){
		$this->location = new Text('location',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setObject($x){
		$this->object = new Text('object',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setParticipant($x){
		$this->participant = new Text('participant',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setResult($x){
		$this->result = new Text('result',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartTime($x){
		$this->startTime = new Text('startTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTarget($x){
		$this->target = new Text('target',$x);
		return $this;
	}


}
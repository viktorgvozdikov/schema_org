<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMessage{
	 /**
	 * A sub property of recipient. The recipient blind copied on a message.
	 * @var String $bccRecipient
	 */
	protected $bccRecipient;

	 /**
	 * A sub property of recipient. The recipient copied on a message.
	 * @var String $ccRecipient
	 */
	protected $ccRecipient;

	 /**
	 * The date/time at which the message has been read by the recipient if a single recipient exists.
	 * @var String $dateRead
	 */
	protected $dateRead;

	 /**
	 * The date/time the message was received if a single recipient exists.
	 * @var String $dateReceived
	 */
	protected $dateReceived;

	 /**
	 * The date/time at which the message was sent.
	 * @var String $dateSent
	 */
	protected $dateSent;

	 /**
	 * A CreativeWork attached to the message.
	 * @var String $messageAttachment
	 */
	protected $messageAttachment;

	 /**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @var String $recipient
	 */
	protected $recipient;

	 /**
	 * A sub property of participant. The participant who is at the sending end of the action.
	 * @var String $sender
	 */
	protected $sender;

	 /**
	 * A sub property of recipient. The recipient who was directly sent the message.
	 * @var String $toRecipient
	 */
	protected $toRecipient;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBccRecipient($x){
		$this->bccRecipient = new Text('bccRecipient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCcRecipient($x){
		$this->ccRecipient = new Text('ccRecipient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateRead($x){
		$this->dateRead = new Text('dateRead',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateReceived($x){
		$this->dateReceived = new Text('dateReceived',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateSent($x){
		$this->dateSent = new Text('dateSent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMessageAttachment($x){
		$this->messageAttachment = new Text('messageAttachment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipient($x){
		$this->recipient = new Text('recipient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSender($x){
		$this->sender = new Text('sender',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setToRecipient($x){
		$this->toRecipient = new Text('toRecipient',$x);
		return $this;
	}


}
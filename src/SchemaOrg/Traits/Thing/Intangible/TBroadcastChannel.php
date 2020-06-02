<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBroadcastChannel{
	 /**
	 * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
	 * @var String $broadcastChannelId
	 */
	protected $broadcastChannelId;

	 /**
	 * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
	 * @var String $broadcastFrequency
	 */
	protected $broadcastFrequency;

	 /**
	 * The type of service required to have access to the channel (e.g. Standard or Premium).
	 * @var String $broadcastServiceTier
	 */
	protected $broadcastServiceTier;

	 /**
	 * Genre of the creative work, broadcast channel or group.
	 * @var String $genre
	 */
	protected $genre;

	 /**
	 * The CableOrSatelliteService offering the channel.
	 * @var String $inBroadcastLineup
	 */
	protected $inBroadcastLineup;

	 /**
	 * The BroadcastService offered on this channel.<br> Inverse property: <a href="/hasBroadcastChannel">hasBroadcastChannel</a>.
	 * @var String $providesBroadcastService
	 */
	protected $providesBroadcastService;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastChannelId($x){
		$this->broadcastChannelId = new Text('BroadcastChannelId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastFrequency($x){
		$this->broadcastFrequency = new Text('BroadcastFrequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastServiceTier($x){
		$this->broadcastServiceTier = new Text('BroadcastServiceTier',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGenre($x){
		$this->genre = new Text('Genre',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInBroadcastLineup($x){
		$this->inBroadcastLineup = new Text('InBroadcastLineup',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvidesBroadcastService($x){
		$this->providesBroadcastService = new Text('ProvidesBroadcastService',$x);
		return $this;
	}


}
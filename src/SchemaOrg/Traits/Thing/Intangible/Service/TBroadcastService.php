<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBroadcastService{
	 /**
	 * The media network(s) whose content is broadcast on this station.
	 * @var String $broadcastAffiliateOf
	 */
	protected $broadcastAffiliateOf;

	 /**
	 * The name displayed in the channel guide. For many US affiliates, it is the network name.
	 * @var String $broadcastDisplayName
	 */
	protected $broadcastDisplayName;

	 /**
	 * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
	 * @var String $broadcastFrequency
	 */
	protected $broadcastFrequency;

	 /**
	 * The timezone in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 format</a> for which the service bases its broadcasts
	 * @var String $broadcastTimezone
	 */
	protected $broadcastTimezone;

	 /**
	 * The organization owning or operating the broadcast service.
	 * @var String $broadcaster
	 */
	protected $broadcaster;

	 /**
	 * A <a href="https://en.wikipedia.org/wiki/Call_sign">callsign</a>, as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
	 * @var String $callSign
	 */
	protected $callSign;

	 /**
	 * A broadcast channel of a broadcast service.<br> Inverse property: <a href="/providesBroadcastService">providesBroadcastService</a>.
	 * @var String $hasBroadcastChannel
	 */
	protected $hasBroadcastChannel;

	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;

	 /**
	 * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
	 * @var String $parentService
	 */
	protected $parentService;

	 /**
	 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	 * @var String $videoFormat
	 */
	protected $videoFormat;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastAffiliateOf($x){
		$this->broadcastAffiliateOf = new Text('broadcastAffiliateOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastDisplayName($x){
		$this->broadcastDisplayName = new Text('broadcastDisplayName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastFrequency($x){
		$this->broadcastFrequency = new Text('broadcastFrequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastTimezone($x){
		$this->broadcastTimezone = new Text('broadcastTimezone',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcaster($x){
		$this->broadcaster = new Text('broadcaster',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCallSign($x){
		$this->callSign = new Text('callSign',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasBroadcastChannel($x){
		$this->hasBroadcastChannel = new Text('hasBroadcastChannel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('inLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setParentService($x){
		$this->parentService = new Text('parentService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVideoFormat($x){
		$this->videoFormat = new Text('videoFormat',$x);
		return $this;
	}


}
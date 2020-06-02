<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event\PublicationEvent;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBroadcastEvent{
	 /**
	 * The event being broadcast such as a sporting event or awards ceremony.
	 * @var String $broadcastOfEvent
	 */
	protected $broadcastOfEvent;

	 /**
	 * True is the broadcast is of a live event.
	 * @var String $isLiveBroadcast
	 */
	protected $isLiveBroadcast;

	 /**
	 * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
	 * @var String $subtitleLanguage
	 */
	protected $subtitleLanguage;

	 /**
	 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	 * @var String $videoFormat
	 */
	protected $videoFormat;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastOfEvent($x){
		$this->broadcastOfEvent = new Text('BroadcastOfEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsLiveBroadcast($x){
		$this->isLiveBroadcast = new Text('IsLiveBroadcast',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubtitleLanguage($x){
		$this->subtitleLanguage = new Text('SubtitleLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVideoFormat($x){
		$this->videoFormat = new Text('VideoFormat',$x);
		return $this;
	}


}
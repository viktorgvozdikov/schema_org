<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TScreeningEvent{
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
	 * The movie presented during this event.
	 * @var String $workPresented
	 */
	protected $workPresented;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubtitleLanguage($x){
		$this->subtitleLanguage = new Text('subtitleLanguage',$x);
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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkPresented($x){
		$this->workPresented = new Text('workPresented',$x);
		return $this;
	}


}
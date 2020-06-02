<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVideoObject{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="/encodingFormat">encodingFormat</a>.
	 * @var String $caption
	 */
	protected $caption;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The composer of the soundtrack.
	 * @var String $musicBy
	 */
	protected $musicBy;

	 /**
	 * Thumbnail image for an image or video.
	 * @var String $thumbnail
	 */
	protected $thumbnail;

	 /**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * @var String $transcript
	 */
	protected $transcript;

	 /**
	 * The frame size of the video.
	 * @var String $videoFrameSize
	 */
	protected $videoFrameSize;

	 /**
	 * The quality of the video.
	 * @var String $videoQuality
	 */
	protected $videoQuality;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActor($x){
		$this->actor = new Text('Actor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCaption($x){
		$this->caption = new Text('Caption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDirector($x){
		$this->director = new Text('Director',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicBy($x){
		$this->musicBy = new Text('MusicBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setThumbnail($x){
		$this->thumbnail = new Text('Thumbnail',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTranscript($x){
		$this->transcript = new Text('Transcript',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVideoFrameSize($x){
		$this->videoFrameSize = new Text('VideoFrameSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVideoQuality($x){
		$this->videoQuality = new Text('VideoQuality',$x);
		return $this;
	}


}
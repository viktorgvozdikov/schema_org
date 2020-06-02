<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicRecording{
	 /**
	 * The artist that performed this album or recording.
	 * @var String $byArtist
	 */
	protected $byArtist;

	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * The album to which this recording belongs.
	 * @var String $inAlbum
	 */
	protected $inAlbum;

	 /**
	 * The playlist to which this recording belongs.
	 * @var String $inPlaylist
	 */
	protected $inPlaylist;

	 /**
	 * The International Standard Recording Code for the recording.
	 * @var String $isrcCode
	 */
	protected $isrcCode;

	 /**
	 * The composition this track is a recording of.<br> Inverse property: <a href="/recordedAs">recordedAs</a>.
	 * @var String $recordingOf
	 */
	protected $recordingOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setByArtist($x){
		$this->byArtist = new Text('byArtist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuration($x){
		$this->duration = new Text('duration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInAlbum($x){
		$this->inAlbum = new Text('inAlbum',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInPlaylist($x){
		$this->inPlaylist = new Text('inPlaylist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsrcCode($x){
		$this->isrcCode = new Text('isrcCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecordingOf($x){
		$this->recordingOf = new Text('recordingOf',$x);
		return $this;
	}


}
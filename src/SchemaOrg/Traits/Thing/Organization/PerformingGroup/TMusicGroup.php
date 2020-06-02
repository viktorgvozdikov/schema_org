<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\PerformingGroup;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicGroup{
	 /**
	 * A music album. Supersedes <a href="/albums">albums</a>.
	 * @var String $album
	 */
	protected $album;

	 /**
	 * Genre of the creative work, broadcast channel or group.
	 * @var String $genre
	 */
	protected $genre;

	 /**
	 * A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes <a href="/tracks">tracks</a>.
	 * @var String $track
	 */
	protected $track;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlbum($x){
		$this->album = new Text('album',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGenre($x){
		$this->genre = new Text('genre',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrack($x){
		$this->track = new Text('track',$x);
		return $this;
	}


}
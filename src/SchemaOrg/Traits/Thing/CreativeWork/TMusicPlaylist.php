<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicPlaylist{
	 /**
	 * The number of tracks in this album or playlist.
	 * @var String $numTracks
	 */
	protected $numTracks;

	 /**
	 * A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes <a href="/tracks">tracks</a>.
	 * @var String $track
	 */
	protected $track;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumTracks($x){
		$this->numTracks = new Text('numTracks',$x);
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
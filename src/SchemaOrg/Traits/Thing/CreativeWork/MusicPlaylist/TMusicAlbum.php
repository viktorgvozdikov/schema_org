<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MusicPlaylist;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicAlbum{
	 /**
	 * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
	 * @var String $albumProductionType
	 */
	protected $albumProductionType;

	 /**
	 * A release of this album.<br> Inverse property: <a href="/releaseOf">releaseOf</a>.
	 * @var String $albumRelease
	 */
	protected $albumRelease;

	 /**
	 * The kind of release which this album is: single, EP or album.
	 * @var String $albumReleaseType
	 */
	protected $albumReleaseType;

	 /**
	 * The artist that performed this album or recording.
	 * @var String $byArtist
	 */
	protected $byArtist;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlbumProductionType($x){
		$this->albumProductionType = new Text('albumProductionType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlbumRelease($x){
		$this->albumRelease = new Text('albumRelease',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlbumReleaseType($x){
		$this->albumReleaseType = new Text('albumReleaseType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setByArtist($x){
		$this->byArtist = new Text('byArtist',$x);
		return $this;
	}


}
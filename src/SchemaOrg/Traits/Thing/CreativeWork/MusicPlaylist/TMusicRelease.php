<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MusicPlaylist;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicRelease{
	 /**
	 * The catalog number for the release.
	 * @var String $catalogNumber
	 */
	protected $catalogNumber;

	 /**
	 * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
	 * @var String $creditedTo
	 */
	protected $creditedTo;

	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
	 * @var String $musicReleaseFormat
	 */
	protected $musicReleaseFormat;

	 /**
	 * The label that issued the release.
	 * @var String $recordLabel
	 */
	protected $recordLabel;

	 /**
	 * The album this is a release of.<br> Inverse property: <a href="/albumRelease">albumRelease</a>.
	 * @var String $releaseOf
	 */
	protected $releaseOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCatalogNumber($x){
		$this->catalogNumber = new Text('catalogNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCreditedTo($x){
		$this->creditedTo = new Text('creditedTo',$x);
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
	public function setMusicReleaseFormat($x){
		$this->musicReleaseFormat = new Text('musicReleaseFormat',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecordLabel($x){
		$this->recordLabel = new Text('recordLabel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReleaseOf($x){
		$this->releaseOf = new Text('releaseOf',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TClip{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * Position of the clip within an ordered group of clips.
	 * @var String $clipNumber
	 */
	protected $clipNumber;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The end time of the clip expressed as the number of seconds from the beginning of the work.
	 * @var String $endOffset
	 */
	protected $endOffset;

	 /**
	 * The composer of the soundtrack.
	 * @var String $musicBy
	 */
	protected $musicBy;

	 /**
	 * The episode to which this clip belongs.
	 * @var String $partOfEpisode
	 */
	protected $partOfEpisode;

	 /**
	 * The season to which this episode belongs.
	 * @var String $partOfSeason
	 */
	protected $partOfSeason;

	 /**
	 * The series to which this episode or season belongs. Supersedes <a href="/partOfTVSeries">partOfTVSeries</a>.
	 * @var String $partOfSeries
	 */
	protected $partOfSeries;

	 /**
	 * The start time of the clip expressed as the number of seconds from the beginning of the work.
	 * @var String $startOffset
	 */
	protected $startOffset;


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
	public function setClipNumber($x){
		$this->clipNumber = new Text('ClipNumber',$x);
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
	public function setEndOffset($x){
		$this->endOffset = new Text('EndOffset',$x);
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
	public function setPartOfEpisode($x){
		$this->partOfEpisode = new Text('PartOfEpisode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfSeason($x){
		$this->partOfSeason = new Text('PartOfSeason',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfSeries($x){
		$this->partOfSeries = new Text('PartOfSeries',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartOffset($x){
		$this->startOffset = new Text('StartOffset',$x);
		return $this;
	}


}
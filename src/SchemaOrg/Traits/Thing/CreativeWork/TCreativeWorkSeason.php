<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCreativeWorkSeason{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $endDate
	 */
	protected $endDate;

	 /**
	 * An episode of a tv, radio or game media within a series or season. Supersedes <a href="/episodes">episodes</a>.
	 * @var String $episode
	 */
	protected $episode;

	 /**
	 * The number of episodes in this season or series.
	 * @var String $numberOfEpisodes
	 */
	protected $numberOfEpisodes;

	 /**
	 * The series to which this episode or season belongs. Supersedes <a href="/partOfTVSeries">partOfTVSeries</a>.
	 * @var String $partOfSeries
	 */
	protected $partOfSeries;

	 /**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @var String $productionCompany
	 */
	protected $productionCompany;

	 /**
	 * Position of the season within an ordered group of seasons.
	 * @var String $seasonNumber
	 */
	protected $seasonNumber;

	 /**
	 * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $startDate
	 */
	protected $startDate;

	 /**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @var String $trailer
	 */
	protected $trailer;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActor($x){
		$this->actor = new Text('actor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDirector($x){
		$this->director = new Text('director',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndDate($x){
		$this->endDate = new Text('endDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEpisode($x){
		$this->episode = new Text('episode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfEpisodes($x){
		$this->numberOfEpisodes = new Text('numberOfEpisodes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfSeries($x){
		$this->partOfSeries = new Text('partOfSeries',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductionCompany($x){
		$this->productionCompany = new Text('productionCompany',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeasonNumber($x){
		$this->seasonNumber = new Text('seasonNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartDate($x){
		$this->startDate = new Text('startDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrailer($x){
		$this->trailer = new Text('trailer',$x);
		return $this;
	}


}
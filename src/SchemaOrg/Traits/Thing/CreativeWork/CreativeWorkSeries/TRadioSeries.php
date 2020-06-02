<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRadioSeries{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * A season that is part of the media series. Supersedes <a href="/season">season</a>.
	 * @var String $containsSeason
	 */
	protected $containsSeason;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * An episode of a tv, radio or game media within a series or season. Supersedes <a href="/episodes">episodes</a>.
	 * @var String $episode
	 */
	protected $episode;

	 /**
	 * The composer of the soundtrack.
	 * @var String $musicBy
	 */
	protected $musicBy;

	 /**
	 * The number of episodes in this season or series.
	 * @var String $numberOfEpisodes
	 */
	protected $numberOfEpisodes;

	 /**
	 * The number of seasons in this series.
	 * @var String $numberOfSeasons
	 */
	protected $numberOfSeasons;

	 /**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @var String $productionCompany
	 */
	protected $productionCompany;

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
		$this->actor = new Text('Actor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContainsSeason($x){
		$this->containsSeason = new Text('ContainsSeason',$x);
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
	public function setEpisode($x){
		$this->episode = new Text('Episode',$x);
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
	public function setNumberOfEpisodes($x){
		$this->numberOfEpisodes = new Text('NumberOfEpisodes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfSeasons($x){
		$this->numberOfSeasons = new Text('NumberOfSeasons',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductionCompany($x){
		$this->productionCompany = new Text('ProductionCompany',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrailer($x){
		$this->trailer = new Text('Trailer',$x);
		return $this;
	}


}
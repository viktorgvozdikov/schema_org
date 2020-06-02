<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTVSeries{
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
	 * The country of the principal offices of the production company or individual responsible for the movie or program.
	 * @var String $countryOfOrigin
	 */
	protected $countryOfOrigin;

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
		$this->actor = new Text('actor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContainsSeason($x){
		$this->containsSeason = new Text('containsSeason',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCountryOfOrigin($x){
		$this->countryOfOrigin = new Text('countryOfOrigin',$x);
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
	public function setEpisode($x){
		$this->episode = new Text('episode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicBy($x){
		$this->musicBy = new Text('musicBy',$x);
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
	public function setNumberOfSeasons($x){
		$this->numberOfSeasons = new Text('numberOfSeasons',$x);
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
	public function setTrailer($x){
		$this->trailer = new Text('trailer',$x);
		return $this;
	}


}
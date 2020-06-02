<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVideoGameSeries{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	 * @var String $characterAttribute
	 */
	protected $characterAttribute;

	 /**
	 * Cheat codes to the game.
	 * @var String $cheatCode
	 */
	protected $cheatCode;

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
	 * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
	 * @var String $gameItem
	 */
	protected $gameItem;

	 /**
	 * Real or fictional location of the game (or part of game).
	 * @var String $gameLocation
	 */
	protected $gameLocation;

	 /**
	 * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
	 * @var String $gamePlatform
	 */
	protected $gamePlatform;

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
	 * Indicate how many people can play this game (minimum, maximum, or range).
	 * @var String $numberOfPlayers
	 */
	protected $numberOfPlayers;

	 /**
	 * The number of seasons in this series.
	 * @var String $numberOfSeasons
	 */
	protected $numberOfSeasons;

	 /**
	 * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
	 * @var String $playMode
	 */
	protected $playMode;

	 /**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @var String $productionCompany
	 */
	protected $productionCompany;

	 /**
	 * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
	 * @var String $quest
	 */
	protected $quest;

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
	public function setCharacterAttribute($x){
		$this->characterAttribute = new Text('characterAttribute',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCheatCode($x){
		$this->cheatCode = new Text('cheatCode',$x);
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
	public function setGameItem($x){
		$this->gameItem = new Text('gameItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGameLocation($x){
		$this->gameLocation = new Text('gameLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGamePlatform($x){
		$this->gamePlatform = new Text('gamePlatform',$x);
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
	public function setNumberOfPlayers($x){
		$this->numberOfPlayers = new Text('numberOfPlayers',$x);
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
	public function setPlayMode($x){
		$this->playMode = new Text('playMode',$x);
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
	public function setQuest($x){
		$this->quest = new Text('quest',$x);
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
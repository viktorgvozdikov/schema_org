<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Game;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVideoGame{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * Cheat codes to the game.
	 * @var String $cheatCode
	 */
	protected $cheatCode;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
	 * @var String $gamePlatform
	 */
	protected $gamePlatform;

	 /**
	 * The server on which  it is possible to play the game.<br> Inverse property: <a href="/game">game</a>.
	 * @var String $gameServer
	 */
	protected $gameServer;

	 /**
	 * Links to tips, tactics, etc.
	 * @var String $gameTip
	 */
	protected $gameTip;

	 /**
	 * The composer of the soundtrack.
	 * @var String $musicBy
	 */
	protected $musicBy;

	 /**
	 * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
	 * @var String $playMode
	 */
	protected $playMode;

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
	public function setCheatCode($x){
		$this->cheatCode = new Text('cheatCode',$x);
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
	public function setGamePlatform($x){
		$this->gamePlatform = new Text('gamePlatform',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGameServer($x){
		$this->gameServer = new Text('gameServer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGameTip($x){
		$this->gameTip = new Text('gameTip',$x);
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
	public function setPlayMode($x){
		$this->playMode = new Text('playMode',$x);
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
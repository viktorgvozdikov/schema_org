<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGameServer{
	 /**
	 * Video game which is played on this server.<br> Inverse property: <a href="/gameServer">gameServer</a>.
	 * @var String $game
	 */
	protected $game;

	 /**
	 * Number of players on the server.
	 * @var String $playersOnline
	 */
	protected $playersOnline;

	 /**
	 * Status of a game server.
	 * @var String $serverStatus
	 */
	protected $serverStatus;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setGame($x){
		$this->game = new Text('game',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPlayersOnline($x){
		$this->playersOnline = new Text('playersOnline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServerStatus($x){
		$this->serverStatus = new Text('serverStatus',$x);
		return $this;
	}


}
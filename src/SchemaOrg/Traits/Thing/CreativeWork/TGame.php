<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGame{
	 /**
	 * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	 * @var String $characterAttribute
	 */
	protected $characterAttribute;

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
	 * Indicate how many people can play this game (minimum, maximum, or range).
	 * @var String $numberOfPlayers
	 */
	protected $numberOfPlayers;

	 /**
	 * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
	 * @var String $quest
	 */
	protected $quest;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCharacterAttribute($x){
		$this->characterAttribute = new Text('CharacterAttribute',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGameItem($x){
		$this->gameItem = new Text('GameItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGameLocation($x){
		$this->gameLocation = new Text('GameLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfPlayers($x){
		$this->numberOfPlayers = new Text('NumberOfPlayers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setQuest($x){
		$this->quest = new Text('Quest',$x);
		return $this;
	}


}
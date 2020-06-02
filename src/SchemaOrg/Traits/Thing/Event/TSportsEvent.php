<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSportsEvent{
	 /**
	 * The away team in a sports event.
	 * @var String $awayTeam
	 */
	protected $awayTeam;

	 /**
	 * A competitor in a sports event.
	 * @var String $competitor
	 */
	protected $competitor;

	 /**
	 * The home team in a sports event.
	 * @var String $homeTeam
	 */
	protected $homeTeam;

	 /**
	 * A type of sport (e.g. Baseball).
	 * @var String $sport
	 */
	protected $sport;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAwayTeam($x){
		$this->awayTeam = new Text('awayTeam',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCompetitor($x){
		$this->competitor = new Text('competitor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHomeTeam($x){
		$this->homeTeam = new Text('homeTeam',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSport($x){
		$this->sport = new Text('sport',$x);
		return $this;
	}


}
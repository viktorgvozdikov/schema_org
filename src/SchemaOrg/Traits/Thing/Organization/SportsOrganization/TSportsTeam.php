<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\SportsOrganization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSportsTeam{
	 /**
	 * A person that acts as performing member of a sports team; a player as opposed to a coach.
	 * @var String $athlete
	 */
	protected $athlete;

	 /**
	 * A person that acts in a coaching role for a sports team.
	 * @var String $coach
	 */
	protected $coach;

	 /**
	 * Gender of something, typically a <a class="localLink" href="/Person">Person</a>, but possibly also fictional characters, animals, etc. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The <a class="localLink" href="/gender">gender</a> property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender <a class="localLink" href="/SportsTeam">SportsTeam</a> can be indicated with a text value of "Mixed".
	 * @var String $gender
	 */
	protected $gender;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAthlete($x){
		$this->athlete = new Text('athlete',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCoach($x){
		$this->coach = new Text('coach',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGender($x){
		$this->gender = new Text('gender',$x);
		return $this;
	}


}
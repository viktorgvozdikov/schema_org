<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEducationEvent{
	 /**
	 * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
	 * @var String $assesses
	 */
	protected $assesses;

	 /**
	 * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
	 * @var String $educationalLevel
	 */
	protected $educationalLevel;

	 /**
	 * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
	 * @var String $teaches
	 */
	protected $teaches;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssesses($x){
		$this->assesses = new Text('assesses',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalLevel($x){
		$this->educationalLevel = new Text('educationalLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTeaches($x){
		$this->teaches = new Text('teaches',$x);
		return $this;
	}


}
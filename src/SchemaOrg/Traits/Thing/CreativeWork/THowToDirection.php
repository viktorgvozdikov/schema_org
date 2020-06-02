<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THowToDirection{
	 /**
	 * A media object representing the circumstances after performing this direction.
	 * @var String $afterMedia
	 */
	protected $afterMedia;

	 /**
	 * A media object representing the circumstances before performing this direction.
	 * @var String $beforeMedia
	 */
	protected $beforeMedia;

	 /**
	 * A media object representing the circumstances while performing this direction.
	 * @var String $duringMedia
	 */
	protected $duringMedia;

	 /**
	 * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
	 * @var String $performTime
	 */
	protected $performTime;

	 /**
	 * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
	 * @var String $prepTime
	 */
	protected $prepTime;

	 /**
	 * A sub-property of instrument. A supply consumed when performing instructions or a direction.
	 * @var String $supply
	 */
	protected $supply;

	 /**
	 * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
	 * @var String $tool
	 */
	protected $tool;

	 /**
	 * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
	 * @var String $totalTime
	 */
	protected $totalTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAfterMedia($x){
		$this->afterMedia = new Text('afterMedia',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBeforeMedia($x){
		$this->beforeMedia = new Text('beforeMedia',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuringMedia($x){
		$this->duringMedia = new Text('duringMedia',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPerformTime($x){
		$this->performTime = new Text('performTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrepTime($x){
		$this->prepTime = new Text('prepTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupply($x){
		$this->supply = new Text('supply',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTool($x){
		$this->tool = new Text('tool',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalTime($x){
		$this->totalTime = new Text('totalTime',$x);
		return $this;
	}


}
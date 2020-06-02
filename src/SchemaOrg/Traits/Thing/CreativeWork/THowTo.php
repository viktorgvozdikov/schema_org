<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THowTo{
	 /**
	 * The estimated cost of the supply or supplies consumed when performing instructions.
	 * @var String $estimatedCost
	 */
	protected $estimatedCost;

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
	 * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection. Supersedes <a href="/steps">steps</a>.
	 * @var String $step
	 */
	protected $step;

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
	 * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
	 * @var String $yield
	 */
	protected $yield;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatedCost($x){
		$this->estimatedCost = new Text('EstimatedCost',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPerformTime($x){
		$this->performTime = new Text('PerformTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrepTime($x){
		$this->prepTime = new Text('PrepTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStep($x){
		$this->step = new Text('Step',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupply($x){
		$this->supply = new Text('Supply',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTool($x){
		$this->tool = new Text('Tool',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalTime($x){
		$this->totalTime = new Text('TotalTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setYield($x){
		$this->yield = new Text('Yield',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TQuantitativeValueDistribution{
	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * The median value.
	 * @var String $median
	 */
	protected $median;

	 /**
	 * The 10th percentile value.
	 * @var String $percentile10
	 */
	protected $percentile10;

	 /**
	 * The 25th percentile value.
	 * @var String $percentile25
	 */
	protected $percentile25;

	 /**
	 * The 75th percentile value.
	 * @var String $percentile75
	 */
	protected $percentile75;

	 /**
	 * The 90th percentile value.
	 * @var String $percentile90
	 */
	protected $percentile90;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuration($x){
		$this->duration = new Text('Duration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMedian($x){
		$this->median = new Text('Median',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPercentile10($x){
		$this->percentile10 = new Text('Percentile10',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPercentile25($x){
		$this->percentile25 = new Text('Percentile25',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPercentile75($x){
		$this->percentile75 = new Text('Percentile75',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPercentile90($x){
		$this->percentile90 = new Text('Percentile90',$x);
		return $this;
	}


}
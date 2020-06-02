<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TObservation{
	 /**
	 * A marginOfError for an <a class="localLink" href="/Observation">Observation</a>.
	 * @var String $marginOfError
	 */
	protected $marginOfError;

	 /**
	 * The measuredProperty of an <a class="localLink" href="/Observation">Observation</a>, either a schema.org property, a property from other RDF-compatible systems e.g. W3C RDF Data Cube, or schema.org extensions such as <a href="https://www.gs1.org/voc/?show=properties">GS1's</a>.
	 * @var String $measuredProperty
	 */
	protected $measuredProperty;

	 /**
	 * The measuredValue of an <a class="localLink" href="/Observation">Observation</a>.
	 * @var String $measuredValue
	 */
	protected $measuredValue;

	 /**
	 * The observationDate of an <a class="localLink" href="/Observation">Observation</a>.
	 * @var String $observationDate
	 */
	protected $observationDate;

	 /**
	 * The observedNode of an <a class="localLink" href="/Observation">Observation</a>, often a <a class="localLink" href="/StatisticalPopulation">StatisticalPopulation</a>.
	 * @var String $observedNode
	 */
	protected $observedNode;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMarginOfError($x){
		$this->marginOfError = new Text('MarginOfError',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMeasuredProperty($x){
		$this->measuredProperty = new Text('MeasuredProperty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMeasuredValue($x){
		$this->measuredValue = new Text('MeasuredValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setObservationDate($x){
		$this->observationDate = new Text('ObservationDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setObservedNode($x){
		$this->observedNode = new Text('ObservedNode',$x);
		return $this;
	}


}
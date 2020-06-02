<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TStatisticalPopulation{
	 /**
	 * Indicates a property used as a constraint to define a <a class="localLink" href="/StatisticalPopulation">StatisticalPopulation</a> with respect to the set of entities
	 *   corresponding to an indicated type (via <a class="localLink" href="/populationType">populationType</a>).
	 * @var String $constrainingProperty
	 */
	protected $constrainingProperty;

	 /**
	 * Indicates the number of constraints (not counting <a class="localLink" href="/populationType">populationType</a>) defined for a particular <a class="localLink" href="/StatisticalPopulation">StatisticalPopulation</a>. This helps applications understand if they have access to a sufficiently complete description of a <a class="localLink" href="/StatisticalPopulation">StatisticalPopulation</a>.
	 * @var String $numConstraints
	 */
	protected $numConstraints;

	 /**
	 * Indicates the populationType common to all members of a <a class="localLink" href="/StatisticalPopulation">StatisticalPopulation</a>.
	 * @var String $populationType
	 */
	protected $populationType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setConstrainingProperty($x){
		$this->constrainingProperty = new Text('ConstrainingProperty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumConstraints($x){
		$this->numConstraints = new Text('NumConstraints',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPopulationType($x){
		$this->populationType = new Text('PopulationType',$x);
		return $this;
	}


}
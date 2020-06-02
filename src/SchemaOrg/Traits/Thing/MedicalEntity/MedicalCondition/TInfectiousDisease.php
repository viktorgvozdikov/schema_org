<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalCondition;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TInfectiousDisease{
	 /**
	 * The actual infectious agent, such as a specific bacterium.
	 * @var String $infectiousAgent
	 */
	protected $infectiousAgent;

	 /**
	 * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
	 * @var String $infectiousAgentClass
	 */
	protected $infectiousAgentClass;

	 /**
	 * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
	 * @var String $transmissionMethod
	 */
	protected $transmissionMethod;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInfectiousAgent($x){
		$this->infectiousAgent = new Text('InfectiousAgent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInfectiousAgentClass($x){
		$this->infectiousAgentClass = new Text('InfectiousAgentClass',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTransmissionMethod($x){
		$this->transmissionMethod = new Text('TransmissionMethod',$x);
		return $this;
	}


}
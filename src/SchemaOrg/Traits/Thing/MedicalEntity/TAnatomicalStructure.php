<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAnatomicalStructure{
	 /**
	 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
	 * @var String $associatedPathophysiology
	 */
	protected $associatedPathophysiology;

	 /**
	 * Location in the body of the anatomical structure.
	 * @var String $bodyLocation
	 */
	protected $bodyLocation;

	 /**
	 * Other anatomical structures to which this structure is connected.
	 * @var String $connectedTo
	 */
	protected $connectedTo;

	 /**
	 * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
	 * @var String $diagram
	 */
	protected $diagram;

	 /**
	 * The anatomical or organ system that this structure is part of.
	 * @var String $partOfSystem
	 */
	protected $partOfSystem;

	 /**
	 * A medical condition associated with this anatomy.
	 * @var String $relatedCondition
	 */
	protected $relatedCondition;

	 /**
	 * A medical therapy related to this anatomy.
	 * @var String $relatedTherapy
	 */
	protected $relatedTherapy;

	 /**
	 * Component (sub-)structure(s) that comprise this anatomical structure.
	 * @var String $subStructure
	 */
	protected $subStructure;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedPathophysiology($x){
		$this->associatedPathophysiology = new Text('AssociatedPathophysiology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBodyLocation($x){
		$this->bodyLocation = new Text('BodyLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setConnectedTo($x){
		$this->connectedTo = new Text('ConnectedTo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiagram($x){
		$this->diagram = new Text('Diagram',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfSystem($x){
		$this->partOfSystem = new Text('PartOfSystem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedCondition($x){
		$this->relatedCondition = new Text('RelatedCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedTherapy($x){
		$this->relatedTherapy = new Text('RelatedTherapy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubStructure($x){
		$this->subStructure = new Text('SubStructure',$x);
		return $this;
	}


}
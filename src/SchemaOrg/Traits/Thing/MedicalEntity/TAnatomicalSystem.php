<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAnatomicalSystem{
	 /**
	 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
	 * @var String $associatedPathophysiology
	 */
	protected $associatedPathophysiology;

	 /**
	 * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
	 * @var String $comprisedOf
	 */
	protected $comprisedOf;

	 /**
	 * A medical condition associated with this anatomy.
	 * @var String $relatedCondition
	 */
	protected $relatedCondition;

	 /**
	 * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
	 * @var String $relatedStructure
	 */
	protected $relatedStructure;

	 /**
	 * A medical therapy related to this anatomy.
	 * @var String $relatedTherapy
	 */
	protected $relatedTherapy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedPathophysiology($x){
		$this->associatedPathophysiology = new Text('associatedPathophysiology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setComprisedOf($x){
		$this->comprisedOf = new Text('comprisedOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedCondition($x){
		$this->relatedCondition = new Text('relatedCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedStructure($x){
		$this->relatedStructure = new Text('relatedStructure',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedTherapy($x){
		$this->relatedTherapy = new Text('relatedTherapy',$x);
		return $this;
	}


}
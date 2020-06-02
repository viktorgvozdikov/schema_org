<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TJoint{
	 /**
	 * The biomechanical properties of the bone.
	 * @var String $biomechnicalClass
	 */
	protected $biomechnicalClass;

	 /**
	 * The degree of mobility the joint allows.
	 * @var String $functionalClass
	 */
	protected $functionalClass;

	 /**
	 * The name given to how bone physically connects to each other.
	 * @var String $structuralClass
	 */
	protected $structuralClass;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBiomechnicalClass($x){
		$this->biomechnicalClass = new Text('BiomechnicalClass',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunctionalClass($x){
		$this->functionalClass = new Text('FunctionalClass',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStructuralClass($x){
		$this->structuralClass = new Text('StructuralClass',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSuperficialAnatomy{
	 /**
	 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
	 * @var String $associatedPathophysiology
	 */
	protected $associatedPathophysiology;

	 /**
	 * Anatomical systems or structures that relate to the superficial anatomy.
	 * @var String $relatedAnatomy
	 */
	protected $relatedAnatomy;

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
	 * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
	 * @var String $significance
	 */
	protected $significance;


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
	public function setRelatedAnatomy($x){
		$this->relatedAnatomy = new Text('relatedAnatomy',$x);
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
	public function setRelatedTherapy($x){
		$this->relatedTherapy = new Text('relatedTherapy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSignificance($x){
		$this->significance = new Text('significance',$x);
		return $this;
	}


}
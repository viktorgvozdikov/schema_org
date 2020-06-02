<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\LifestyleModification;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPhysicalActivity{
	 /**
	 * The anatomy of the underlying organ system or structures associated with this entity.
	 * @var String $associatedAnatomy
	 */
	protected $associatedAnatomy;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

	 /**
	 * The characteristics of associated patients, such as age, gender, race etc.
	 * @var String $epidemiology
	 */
	protected $epidemiology;

	 /**
	 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
	 * @var String $pathophysiology
	 */
	protected $pathophysiology;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedAnatomy($x){
		$this->associatedAnatomy = new Text('AssociatedAnatomy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('Category',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEpidemiology($x){
		$this->epidemiology = new Text('Epidemiology',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPathophysiology($x){
		$this->pathophysiology = new Text('Pathophysiology',$x);
		return $this;
	}


}
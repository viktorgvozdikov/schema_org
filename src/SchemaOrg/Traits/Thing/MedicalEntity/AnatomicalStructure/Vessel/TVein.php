<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVein{
	 /**
	 * The vasculature that the vein drains into.
	 * @var String $drainsTo
	 */
	protected $drainsTo;

	 /**
	 * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
	 * @var String $regionDrained
	 */
	protected $regionDrained;

	 /**
	 * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
	 * @var String $tributary
	 */
	protected $tributary;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDrainsTo($x){
		$this->drainsTo = new Text('DrainsTo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRegionDrained($x){
		$this->regionDrained = new Text('RegionDrained',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTributary($x){
		$this->tributary = new Text('Tributary',$x);
		return $this;
	}


}
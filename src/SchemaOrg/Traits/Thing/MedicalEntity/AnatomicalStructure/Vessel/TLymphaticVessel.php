<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLymphaticVessel{
	 /**
	 * The vasculature the lymphatic structure originates, or afferents, from.
	 * @var String $originatesFrom
	 */
	protected $originatesFrom;

	 /**
	 * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
	 * @var String $regionDrained
	 */
	protected $regionDrained;

	 /**
	 * The vasculature the lymphatic structure runs, or efferents, to.
	 * @var String $runsTo
	 */
	protected $runsTo;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setOriginatesFrom($x){
		$this->originatesFrom = new Text('originatesFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRegionDrained($x){
		$this->regionDrained = new Text('regionDrained',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRunsTo($x){
		$this->runsTo = new Text('runsTo',$x);
		return $this;
	}


}
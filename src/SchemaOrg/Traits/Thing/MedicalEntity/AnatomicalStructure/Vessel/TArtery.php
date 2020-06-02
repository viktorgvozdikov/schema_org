<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TArtery{
	 /**
	 * The branches that comprise the arterial structure. Supersedes <a href="/branch">branch</a>.
	 * @var String $arterialBranch
	 */
	protected $arterialBranch;

	 /**
	 * The area to which the artery supplies blood.
	 * @var String $supplyTo
	 */
	protected $supplyTo;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArterialBranch($x){
		$this->arterialBranch = new Text('ArterialBranch',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupplyTo($x){
		$this->supplyTo = new Text('SupplyTo',$x);
		return $this;
	}


}
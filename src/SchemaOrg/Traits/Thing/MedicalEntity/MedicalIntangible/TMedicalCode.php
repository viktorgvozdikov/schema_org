<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalIntangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalCode{
	 /**
	 * The coding system, e.g. 'ICD-10'.
	 * @var String $codingSystem
	 */
	protected $codingSystem;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCodingSystem($x){
		$this->codingSystem = new Text('codingSystem',$x);
		return $this;
	}


}
<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalTest;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalTestPanel{
	 /**
	 * A component test of the panel.
	 * @var String $subTest
	 */
	protected $subTest;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubTest($x){
		$this->subTest = new Text('subTest',$x);
		return $this;
	}


}
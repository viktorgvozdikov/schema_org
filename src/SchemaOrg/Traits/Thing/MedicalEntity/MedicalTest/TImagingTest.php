<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\MedicalTest;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TImagingTest{
	 /**
	 * Imaging technique used.
	 * @var String $imagingTechnique
	 */
	protected $imagingTechnique;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setImagingTechnique($x){
		$this->imagingTechnique = new Text('imagingTechnique',$x);
		return $this;
	}


}
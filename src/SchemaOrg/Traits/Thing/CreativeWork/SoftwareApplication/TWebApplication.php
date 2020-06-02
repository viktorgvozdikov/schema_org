<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\SoftwareApplication;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWebApplication{
	 /**
	 * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
	 * @var String $browserRequirements
	 */
	protected $browserRequirements;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBrowserRequirements($x){
		$this->browserRequirements = new Text('BrowserRequirements',$x);
		return $this;
	}


}
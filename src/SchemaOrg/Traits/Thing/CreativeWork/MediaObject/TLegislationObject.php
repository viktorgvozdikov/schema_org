<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLegislationObject{
	 /**
	 * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
	 * @var String $legislationLegalValue
	 */
	protected $legislationLegalValue;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationLegalValue($x){
		$this->legislationLegalValue = new Text('legislationLegalValue',$x);
		return $this;
	}


}